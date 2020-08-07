#!/usr/bin/env python
import pandas as pd
import csv
#Loading NLTK
import nltk
from nltk.tokenize import sent_tokenize
from nltk.tokenize import word_tokenize
import string
import re
import sys

def returnRes(results):
	return results

filename =  sys.argv[1] 

#file = 'C:/xamp/htdocs/hit400/public/python/pattern/'+filename+'.csv'
file = '/opt/lampp/htdocs/intellipro/public/python/pattern/'+filename+'.csv'
csvarray = []
with open(file, 'r') as csvfile:  # this will close the file automatically.
    reader = csv.reader(csvfile)
    for row in reader:
    	csvarray.append(row[1])
        #print(row[1])

phrase = " ".join(str(x) for x in csvarray)



text = re.sub(r'\s+', ' ',   phrase)
#tokenized_text=sent_tokenize(csvarray)


#Word Tokenization

# tokenized_word=word_tokenize(text)
# print(tokenized_word)

# #Frequency Distribution
# from nltk.probability import FreqDist
# fdist = FreqDist(tokenized_word)
# print(fdist)

# #most common  words

# print(fdist.most_common(2))

# #printing stopwords

# from nltk.corpus import stopwords
# stop_words=set(stopwords.words("english"))
# #print(stop_words)


# #removing stopwords
# filtered_sent=[]
# for w in tokenized_word:
# 	if w not in stop_words:

# 	#removing punctuation
# 		puncuated = w.translate(str.maketrans('','',string.punctuation))
# 		filtered_sent.append(puncuated.lower())
# print("Tokenized Sentence:",tokenized_word)
# print("Filterd Sentence:",filtered_sent)

# # # Stemming removing ed ,ing etc
# # from nltk.stem import PorterStemmer
# # from nltk.tokenize import sent_tokenize, word_tokenize

# # ps = PorterStemmer()

# # stemmed_words=[]
# # for w in filtered_sent:
# #     stemmed_words.append(ps.stem(w))

# # print("Filtered Sentence:",filtered_sent)
# # print("Stemmed Sentence:",stemmed_words)


# #lemmatization 

# from nltk.stem.wordnet import WordNetLemmatizer
# lem = WordNetLemmatizer()

# lemmatized_words =[]
# for w in filtered_sent:
# 	lemmatized_words.append(lem.lemmatize(w,"v"))


# print("Lemmatized Word:",lemmatized_words)

# recurring = FreqDist(lemmatized_words)


# #future work 

# #to add part of speech 

# print("Lemmatized Word: ",recurring.most_common(2))


#identifying the most common phrase using n gram 

import nltk
from nltk.collocations import *

# def Values():
bigram_measures = nltk.collocations.BigramAssocMeasures()
trigram_measures = nltk.collocations.TrigramAssocMeasures()

# reading from lemmatized words
finder = BigramCollocationFinder.from_words(csvarray)

# only bigrams that appear 3+ times
finder.apply_freq_filter(3)

# return the 10 n-grams with the highest PMI
#print(type(finder.nbest(bigram_measures.pmi, 10)))

arry = finder.nbest(bigram_measures.pmi, 10)

with open('/opt/lampp/htdocs/intellipro/public/python/pattern/recur_'+filename+'.csv', mode='w') as employee_file:
	for w in arry:
		employee_writer = csv.writer(employee_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
		employee_writer.writerow(w)

returnRes('recur_'+filename+'.csv')













































# #!/usr/bin/env python
# import pandas as pd
# import csv
# #Loading NLTK
# import nltk
# from nltk.tokenize import sent_tokenize
# import string
# import re




# file = '/opt/lampp/htdocs/hit400/public/python/pattern/issues.csv'
# csvarray = []
# with open(file, 'r') as csvfile:  # this will close the file automatically.
#     reader = csv.reader(csvfile)
#     for row in reader:
#     	csvarray.append(row[1])
#         #print(row[1])

# phrase = " ".join(str(x) for x in csvarray)


# text = re.sub(r'\s+', ' ',   phrase)
# tokenized_text=sent_tokenize(text)


# #Word Tokenization
# from nltk.tokenize import word_tokenize
# tokenized_word=word_tokenize(text)
# print(tokenized_word)

# #Frequency Distribution
# from nltk.probability import FreqDist
# fdist = FreqDist(tokenized_word)
# print(fdist)

# #most common  words

# print(fdist.most_common(2))

# #printing stopwords

# from nltk.corpus import stopwords
# stop_words=set(stopwords.words("english"))
# #print(stop_words)


# #removing stopwords
# filtered_sent=[]
# for w in tokenized_word:
# 	if w not in stop_words:

# 	#removing punctuation
# 		puncuated = w.translate(str.maketrans('','',string.punctuation))
# 		filtered_sent.append(puncuated.lower())
# print("Tokenized Sentence:",tokenized_word)
# print("Filterd Sentence:",filtered_sent)

# # # Stemming removing ed ,ing etc
# # from nltk.stem import PorterStemmer
# # from nltk.tokenize import sent_tokenize, word_tokenize

# # ps = PorterStemmer()

# # stemmed_words=[]
# # for w in filtered_sent:
# #     stemmed_words.append(ps.stem(w))

# # print("Filtered Sentence:",filtered_sent)
# # print("Stemmed Sentence:",stemmed_words)


# #lemmatization 

# from nltk.stem.wordnet import WordNetLemmatizer
# lem = WordNetLemmatizer()

# lemmatized_words =[]
# for w in filtered_sent:
# 	lemmatized_words.append(lem.lemmatize(w,"v"))


# print("Lemmatized Word:",lemmatized_words)

# recurring = FreqDist(lemmatized_words)


# #future work 

# #to add part of speech 

# print("Lemmatized Word: ",recurring.most_common(2))


# #identifying the most common phrase using n gram 

# import nltk
# from nltk.collocations import *
# bigram_measures = nltk.collocations.BigramAssocMeasures()
# trigram_measures = nltk.collocations.TrigramAssocMeasures()

# # reading from lemmatized words
# finder = BigramCollocationFinder.from_words(lemmatized_words)

# # only bigrams that appear 3+ times
# finder.apply_freq_filter(3)

# # return the 10 n-grams with the highest PMI
# #print(finder.nbest(bigram_measures.pmi, 10))

# print(12345)
