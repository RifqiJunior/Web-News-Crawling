# import json
import requests
from bs4 import BeautifulSoup


class Kompas:
    def getKompas(self, news,keywords):
        for keyword in keywords:
            kompas = requests.get("https://www.kompas.com/tag/"+keyword)
            soup = BeautifulSoup(kompas.content, features="lxml")
            info = "Kompas"
            kompas_title = soup.find_all(
                'div', {'class', 'article__list clearfix'})
            for each in kompas_title:
                image = each.img.get('src')
                judul = each.find(
                    'h3', {'class', 'article__title article__title--medium'}).text.replace('\n', '')
                link = each.a.get('href')
                date = each.find('div', {'class', 'article__date'}).text
                news.append([image, judul, link, date, info,keyword])
        return news
