import numpy as np
import pandas as pd
from sklearn.linear_model import LinearRegression
from sklearn.preprocessing import PolynomialFeatures
from sklearn.metrics import mean_absolute_error,mean_squared_error
from joblib import dump, load
from sklearn.preprocessing import PolynomialFeatures
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.linear_model import Ridge
import tkinter
from tkinter.ttk import Label

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

print(df.head())



for i in key:
    if i=='Role':
        continue
    df[i] = df[i].apply(val)

# print(df.head())
x=df.drop('Role',axis=1)
y=df['Role'].apply(encode)

# polynomial_converter = PolynomialFeatures(degree=3,include_bias=False)
# poly_features = polynomial_converter.fit_transform(x)

# X_train, X_test, y_train, y_test = train_test_split(poly_features, y, test_size=0.3, random_state=101)
# scaler = StandardScaler()
# scaler.fit(X_train)
# X_train = scaler.transform(X_train)
# X_test = scaler.transform(X_test)
# ridge_model = Ridge(alpha=10)
# ridge_model.fit(X_train,y_train)
# test_predictions = ridge_model.predict(X_test)
# MAE = mean_absolute_error(y_test,test_predictions)
# MSE = mean_squared_error(y_test,test_predictions)
# RMSE = np.sqrt(MSE)
# print(f'Mean absolute error : {MAE}')
# print(f'Mean square error : {MSE}')
# print(f'Root Mean square error : {RMSE}')


polynomial_converter = PolynomialFeatures(degree=3,include_bias=False)
poly_features = polynomial_converter.fit_transform(x)
    
# SPLIT THIS NEW POLY DATA SET
X_train, X_test, y_train, y_test = train_test_split(poly_features, y, test_size=0.3, random_state=101)
    
# TRAIN ON THIS NEW POLY SET
model = LinearRegression(fit_intercept=True)
model.fit(X_train,y_train)
    
# PREDICT ON BOTH TRAIN AND TEST
test_pred = model.predict(X_test)
    
# Calculate Errors
test_MSE = mean_squared_error(y_test,test_pred)
test_MAE = mean_absolute_error(y_test,test_pred)

print("Errors : ")
print(test_MSE)
print(test_MAE)
print(np.sqrt(test_MAE))


final_model = LinearRegression()
final_poly_converter = PolynomialFeatures(degree=1,include_bias=False)
final_model.fit(final_poly_converter.fit_transform(x.values),y)

dump(final_model, 'role_model.joblib') 
dump(final_poly_converter,'poly_converter.joblib')


loaded_poly = load('poly_converter.joblib')
loaded_model = load('role_model.joblib')

print('Enter the integer value in the range [0,10]')

ratings=[]
for i in key:
    if i=='Role':
        continue
    inp=12
    while inp <0 or inp >10:
        try:
            inp=int(input(i+ ' : '))
            if inp<0:
                root=tkinter.Tk()
                root.geometry('300x200')
                root.title("Alert")
                label = Label(root,text='Value less than range not allowed')
                label.pack(ipadx=10,ipady=10)
                root.mainloop()
                print("Value less than range not allowed")
            if inp>10:
                root=tkinter.Tk()
                root.geometry('300x200')
                root.title("Alert")
                label = Label(root,text='Value above range not allowed')
                label.pack(ipadx=10,ipady=10)
                root.mainloop()
                print("Value above range not allowed")
        except:
            root=tkinter.Tk()
            root.geometry('300x200')
            root.title("Alert")
            label = Label(root,text='Invalid input')
            label.pack(ipadx=10,ipady=10)
            root.mainloop()
            print('Invalid Input')
        

    ratings.append(inp)


campaign_po = loaded_poly.transform([np.array(ratings)])

print(f'His career path looks great in {decode(loaded_model.predict(campaign_po))}')


root=tkinter.Tk()
root.geometry('600x400')
root.title("Career Prediction System")
label = Label(root,text=f'His career path looks great in {decode(loaded_model.predict(campaign_po))}')
label.pack(ipadx=10,ipady=10)
root.mainloop()




# print(key)

# [7,5,5,7,8,6,9,3,5,1,2,7,8,6,4,2,5] : Application Support Engineer
# 

# testing of this model +15 lines
# proper input for every field 10 lines
# proper output



# cache memory
