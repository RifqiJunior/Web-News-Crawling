from newspaper import Article
import nltk
import requests
import main
import urllib
from read_desc import getURL


# class detail:
#     def summary():
url = requests.get(
    'https://www.detik.com/jabar/jabar-gaskeun/d-6406148/inovasi-tel-u-hadirkan-dua-sepeda-motor-listrik')
my_article = Article('')
my_article.parse()
texts = my_article.text
print(texts)
# isi= []
# def Summary():
#         my_article = Article(getURL)
#         my_article.parse()

#         date = my_article.publish_date
#         title = my_article.title
#         texts = my_article.text
#         author = my_article.authors
#         print (title)
# # isi.append([date, title, texts, author])
# summary()
