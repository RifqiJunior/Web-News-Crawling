import json
from pickle import NEWFALSE
from pydoc import importfile
from types import new_class
from detikscrap import Detik
from kompas import Kompas
from liputan6 import Liputan
from one import One
from tribun import Tribun

news = []
keywords = ['jawa-barat','kuliner','ridwan-kamil','pemprov-jabar','pemprov-jawa-barat','Gubernur-Jawa-Barat','pembangunan']

def scrap():

    kompas = Kompas()
    kompas.getKompas(news,keywords)

    liputan6 = Liputan()
    liputan6.getLiputan(news,keywords)

    tvone = One()
    tvone.getOne(news, keywords)
    
    tribun = Tribun()
    tribun.getTribun(news,keywords)
    
    detik = Detik()
    detik.getDetik(news,keywords)

    print(json.dumps(news))


scrap()
