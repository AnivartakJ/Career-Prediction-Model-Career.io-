import numpy as np
import pandas as pd
from sklearn.linear_model import LinearRegression
from sklearn.linear_model import LogisticRegression
from sklearn.preprocessing import PolynomialFeatures
from joblib import dump, load

df = pd.read_csv("dataset9000.csv")

def val(v):
    if v=='Not Interested':
        return 0
    if v=='Poor':
        return 1
    if v=='Beginner':
        return 3
    if v=='Average':
        return 5
    if v=='Intermediate':
        return 6
    if v=='Excellent':
        return 8
    if v=='Professional':
        return 10
    return 0

list = ['Database Administrator' ,'Hardware Engineer',
 'Application Support Engineer', 'Cyber Security Specialist',
 'Networking Engineer' ,'Software Developer' ,'API Specialist',
 'Project Manager', 'Information Security Specialist' ,'Technical Writer',
 'AI ML Specialist', 'Software tester', 'Business Analyst',
 'Customer Service Executive' ,'Data Scientist', 'Helpdesk Engineer',
 'Graphics Designer']

def encode(role):
    for i in range(0,len(list)):
        if role == list[i]:
            return i
        
def decode(c):
    return list[int(c)]

key = df.keys()
# ['Database Fundamentals', 'Computer Architecture',
#        'Distributed Computing Systems', 'Cyber Security', 'Networking',
#        'Software Development', 'Programming Skills', 'Project Management',
#        'Computer Forensics Fundamentals', 'Technical Communication', 'AI ML',
#        'Software Engineering', 'Business Analysis', 'Communication skills',
#        'Data Science', 'Troubleshooting skills', 'Graphics Designing', 'Role']
# key.delete('Role')

for i in key:
    if i=='Role':
        continue
    df[i] = df[i].apply(val)
# print(df.head())
x=df.drop('Role',axis=1)
y=df['Role'].apply(encode)

final_model = LogisticRegression(max_iter=500)
final_poly_converter = PolynomialFeatures(degree=1,include_bias=False)
final_model.fit(final_poly_converter.fit_transform(x.values),y)

# save the model
dump(final_model, 'role_model.joblib') 
dump(final_poly_converter,'poly_converter.joblib')

# load the model
loaded_poly = load('poly_converter.joblib')
loaded_model = load('role_model.joblib')

ratings=[]

for i in key:
    if i=='Role':
        continue
    ratings.append(int(input(i+ ' : ')))

campaign_po = loaded_poly.transform([np.array(ratings)])

print(decode(loaded_model.predict(campaign_po)))





