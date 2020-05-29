import requests
import time
import random
from bs4 import BeautifulSoup
import pymongo

# ====
client = pymongo.MongoClient('localhost', 27017)
test = client['test']
video = test['ichiyee']

#  ========


base_link = [ 'https://list.tw.iqiyi.com/www/2/-------------11-', '-1---.html' ]

video_links = []

Dict = {}

max_page = 1

for i in range( 1, max_page+1 ):
    r = requests.get( base_link[0] + str( i ) + base_link[1] )

    if ( r.status_code == requests.codes.ok ):
        soup = BeautifulSoup( r.text, 'lxml' )

        pList = soup.find( id = 'twVideoListWrap' ).find_all( 'div', class_='plist-item' )

        for p in pList:
            a = p.find( 'a', class_ = 'tw-list-link' )
            video_links.append( 'https:' + a['href'] )
        
    print( f'progress: {i}/{max_page}' )


for i, link in enumerate( video_links ):
    r = requests.get( link )

    if ( r.status_code != requests.codes.ok ):
        continue

    soup = BeautifulSoup( r.text, 'lxml' )

    r = requests.get( 'https:' + soup.find( class_ = 'tw-play-title' ).find( 'a' )['href'] )
    
    if ( r.status_code == requests.codes.ok ):
        soup = BeautifulSoup( r.text, 'lxml' )

        content_childs = soup.find( 'div', class_ = 'tw-album-intro-text' ).find_all( 'div', class_ = 'content-item' )


        video_name = soup.find( 'a', class_ = 'slide-title' ).find( 'h1', class_ = 'b-tit' ).text.strip()
        
        info = soup.find( 'div', class_ = 'tw-album-intro-text' ).find( 'div', class_ = 'content-intro' ).find( 'span', class_ = 'intro-txt' ).text.strip()

        director = ''
        actors = []
        video_types = []
        area = ''
        score = ''
        video_time = ''
        year=''
        for j, child in enumerate( content_childs ):
            if child.text[:2] == '導演':
                director = content_childs[j].find( 'span' ).text.strip()
            elif child.text[:2] == '主演':
                for actor in content_childs[j].find_all( 'span' ):
                    actors.append( actor.text.strip() )
            elif child.text[:2] == '類型':
                for video_type in content_childs[j].find_all( 'a' ):
                    video_types.append( video_type.text.strip() )
            if child.text[:2] == '地區':
                area = content_childs[j].find( 'a' ).text.strip()
            if child.text[:2] == '年份':
                year = content_childs[j].find( 'span' ).text.strip()

        Dict[video_name] = {
            'video_name': video_name, #
            'director': director, #
            'actors': actors,
            'type': video_types, #
            'area': area, #
            'year':year,
            'introduction':info

            
        }
        time.sleep( random.random() * 0.5 + 0.5 )
    
    print( f'data process: {i+1}/{len(video_links)}' )


with open( 'test.txt', mode='w', encoding='utf-8' ) as f:
    for v, k in Dict.items():
        text = '\n' + v + ' : '
        for v2, k2 in k.items():
            if type( k2 ) == list:
                k2 = ' , '.join( k2 )
            text += '\n\t' + v2 + ' : ' + k2

        f.write( text )
        
        video.insert_one( k )

print( 'Done!' )