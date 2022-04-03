import requests as rq
from lxml import *
from bs4 import BeautifulSoup as bs
link = "https://browser-info.ru/"
headers = {
	"User-Agent" : "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0",
}
request = rq.get(link, headers=headers)

if request.status_code == 200:
	print("Я подключился!")
soup = bs(request.text, "lxml")
ua = soup.find("div", {"id":"user_agent"})
print(ua.text)
































input()




'''
html_doc = """
<html><head><title>The Dormouse's story</title></head>
<body>
<p class="title"><b>The Dormouse's story</b></p>

<div>
	
	<span>
		<h1 class="child" id="boy">i am very good boy!</h1>
		<h1 class="child" id="sam">Hi Sam!</h1>
	</span>

</div>
<div>
	<div>
		<p class="story">Once upon a time there were three little sisters; and their names were
			<a href="http://example.com/elsie" class="sister" id="link1">Elsie</a>,
			<a href="http://example.com/lacie" class="sister" id="link2">Lacie</a> and
			<a href="http://example.com/tillie" class="sister" id="link3">Tillie</a>;
			and they lived at the bottom of a well.</p>
		<p class="story">...</p>
	</div>
</div>
"""

#soup = bs(html_doc, "lxml")

#class_child = soup.find_all("h1", class_="child")
#for item in class_child:
#	print(item.text)

#sam = soup.find("h1", {"id":"sam"})
#print(type(sam))

#all_a = soup.find_all("a")
#for item in all_a:
#	print(item.get("id"))

#parents_a = soup.find("a").find_next()
#print(parents_a)
'''