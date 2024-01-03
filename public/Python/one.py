from bs4 import BeautifulSoup
import requests


class One:
    def getOne(self, news,keywords):
        for keyword in keywords:
            OneNews = requests.get("https://www.tvonenews.com/tag/")
            soup = BeautifulSoup(OneNews.content, features="lxml")
            info = "TV One"
            jabar_title = soup.find_all(
                'div', {'class', 'article-list-row', 'aria-label'})
            for each in jabar_title:
                image = each.img.get('data-original')
                judul = each.find('h2').text.replace('\n', '')
                link = each.a.get('href')
                # desc = each.get_text('div', {'class', 'ali-desc'}).replace('div', '')
                date = each.find('li',{'class', 'ali-date content_center'}).find('span').text[:-8]
                news.append([image, judul, link, date, info,keyword])
        return news
