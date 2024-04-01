import pandas as pd
import numpy as np
import pickle
import tkinter
from tkinter.ttk import Label

career = pd.read_csv('dataset9000.data', header = None)
#np.dtype('float64')

X = np.array(career.iloc[:, 0:17]) #X is skills
print(X)
y = np.array(career.iloc[:, 17]) #Y is Roles
print("hi")
print(y) 

##  attribute to return the column labels of the given Dataframe
career.columns = ["Database Fundamentals","Computer Architecture","Distributed Computing Systems",
"Cyber Security","Networking","Development","Programming Skills","Project Management",
"Computer Forensics Fundamentals","Technical Communication","AI ML","Software Engineering","Business Analysis",
"Communication skills","Data Science","Troubleshooting skills","Graphics Designing","Role"]

career.dropna(how ='all', inplace = True)
#print("career.dropna(how ='all', inplace = True)",career.dropna(how ='all', inplace = True))
career.head()
## splitting the data into training and test sets 
from sklearn.model_selection import train_test_split 
X_train, X_test, y_train, y_test = train_test_split(X, y,test_size = 0.3, random_state = 524)
from sklearn.neighbors import KNeighborsClassifier
from sklearn import metrics
knn = KNeighborsClassifier(n_neighbors=5)

knn.fit(X_train, y_train)
print('X_train',X_train)
print('y_train',y_train)
y_pred = knn.predict(X_test)
print('y_pred',y_pred)
scores = metrics.accuracy_score(y_test, y_pred)
print('Accuracy=',scores*100)

pickle.dump(knn, open('careerlast.pkl','wb'))

print('y_pred',y_pred)

ratings=[]
for i in career.columns:
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
print(knn.predict([ratings])[0])


root=tkinter.Tk()
root.geometry('600x400')
root.title("Career Prediction System")
label = Label(root,text=f'His career path looks great in {knn.predict([ratings])[0]}')
label.pack(ipadx=10,ipady=10)
root.mainloop()