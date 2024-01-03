import requests
from bs4 import BeautifulSoup


class Liputan():
    def getLiputan(self, news,keywords):
        for keyword in keywords:
            liputan = requests.get("https://www.liputan6.com/tag/"+keyword)
            soup = BeautifulSoup(liputan.content, features="lxml")
            info = "Liputan 6"
            bandung_title = soup.find_all('article', {'class', 'articles--iridescent-list--item articles--iridescent-list--text-item'})
            for each in bandung_title:
                image = each.img.get('src')
                judul = each.find('div', {
                    'class', 'articles--iridescent-list--text-item__summary articles--iridescent-list--text-item__summary-seo'}).text.replace('\n', '')
                link = each.a.get('href')
                date = each.find('time', {'articles--iridescent-list--text-item__time timeago', 'datetime', 'title'}).text[:-6]
                news.append([image, judul, link, date, info,keyword])
        return news
    # for keyword in keywords:
    #     parseKeyword = keyword.replace(' ', '+')   # desc = each.find('div', {
    #     'class', 'articles--iridescent-list--text-item__summary articles--iridescent-list--text-item__summary-seo', 'summary'}).text.replace('\n', '')