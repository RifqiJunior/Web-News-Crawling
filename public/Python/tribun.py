from bs4 import BeautifulSoup
import requests


class Tribun:
    def getTribun(self, news,keywords):
        for keyword in keywords:
            # link
            Tribun = requests.get("https://jabar.tribunnews.com/tag/"+keyword)
            # insert bs4
            soup = BeautifulSoup(Tribun.content, features="lxml")
            info = "Tribun Jabar"
            # parent tags
            tribun = soup.find_all('li', {'class', 'p1520 art-list pos_rel'})
            # loop tag finding from parent
            for each in tribun:
                image = each.img.get('src')
                judul = each.a.get('title')
                link = each.a.get('href')
                date = each.find('div', {'class', 'grey pt5', 'foot timeago'}).find(
                    'time').get('title')[:-9].replace('-', '/')
                news.append([image, judul, link, date, info,keyword])
        return news
