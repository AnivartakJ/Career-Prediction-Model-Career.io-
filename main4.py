import pandas as pd
import numpy as np
import pickle
import tkinter
from tkinter.ttk import Label
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn import metrics

# Load the dataset
career = pd.read_csv('dataset9000.data', header=None)

# Define X and y
X = np.array(career.iloc[:, 0:17])  # Features
y = np.array(career.iloc[:, 17])    # Target

# Set column labels for the dataframe
career.columns = ["Database Fundamentals", "Computer Architecture", "Distributed Computing Systems",
                  "Cyber Security", "Networking", "Development", "Programming Skills", "Project Management",
                  "Computer Forensics Fundamentals", "Technical Communication", "AI ML", "Software Engineering",
                  "Business Analysis", "Communication skills", "Data Science", "Troubleshooting skills",
                  "Graphics Designing", "Role"]

# Remove any rows with all NaN values
career.dropna(how='all', inplace=True)

# Introduce randomness by using a smaller dataset for training
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.1, random_state=524)

# Initialize and train the Random Forest model with adjusted parameters
rf = RandomForestClassifier(n_estimators=50, max_depth=10, min_samples_split=5, min_samples_leaf=2, random_state=524)
rf.fit(X_train, y_train)

# Make predictions on the test set
y_pred = rf.predict(X_test)

# Calculate accuracy
accuracy = metrics.accuracy_score(y_test, y_pred)
print('Accuracy:', accuracy * 100)

# Save the model
pickle.dump(rf, open('career_rf_model.pkl', 'wb'))

# Take user input for ratings
ratings = []
for i in career.columns:
    if i == 'Role':
        continue
    inp = 12
    while inp < 0 or inp > 10:
        try:
            inp = int(input(i + ' : '))
            if inp < 0:
                root = tkinter.Tk()
                root.geometry('300x200')
                root.title("Alert")
                label = Label(root, text='Value less than range not allowed')
                label.pack(ipadx=10, ipady=10)
                root.mainloop()
                print("Value less than range not allowed")
            if inp > 10:
                root = tkinter.Tk()
                root.geometry('300x200')
                root.title("Alert")
                label = Label(root, text='Value above range not allowed')
                label.pack(ipadx=10, ipady=10)
                root.mainloop()
                print("Value above range not allowed")
        except:
            root = tkinter.Tk()
            root.geometry('300x200')
            root.title("Alert")
            label = Label(root, text='Invalid input')
            label.pack(ipadx=10, ipady=10)
            root.mainloop()
            print('Invalid Input')

    ratings.append(inp)

# Make prediction using the trained model
predicted_career = rf.predict([ratings])[0]

# Display the result using tkinter
root = tkinter.Tk()
root.geometry('600x400')
root.title("Career Prediction System")
label = Label(root, text=f'His career path looks great in {predicted_career}')
label.pack(ipadx=10, ipady=10)
root.mainloop()
