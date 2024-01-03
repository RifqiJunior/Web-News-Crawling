
import requests
from bs4 import BeautifulSoup


class Detik:
    def getDetik(self, news,keywords):
        for keyword in keywords:
            detik = requests.get("https://www.detik.com/tag/"+keyword)
            soup = BeautifulSoup(detik.content, features="lxml")
            info = "Detik"
            detik_title = soup.find_all(
                'div', {'class', 'media media--left media--image-radius block-link'})
            for each in detik_title:
                image = each.img.get('src')
                judul = each.find(
                    'h3', {'class', 'media__title'}).text.replace('\n', '')
                link = each.a.get('href')
                date = each.find('div', {'span', 'media__date', 'title'}).span.get(
                    'title').split(',')[-1].split(">")[-1]
                news.append([image, judul, link, date, info, keyword])
        return news
