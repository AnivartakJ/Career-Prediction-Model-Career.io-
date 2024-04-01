# Career Prediction Model
This project, integrated into our career website, leverages machine learning models to aid users in identifying suitable career paths within the computer science domain based on their interests in various fields. Drawing from a diverse range of references and knowledge, our career website offers a comprehensive outlook on potential career trajectories. 
# Home page
![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/2b0a5371-64e7-40f1-9fdd-47f8552f9e67)

# Prediction demo page
![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/aa7f62de-c2d3-427b-b8b5-254eb940ee9e)

# Courses page 
![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/1faaf4fe-c273-4476-8255-4e03b611bcc7)




This  offers a predictive model to assist users in determining their career paths within the computer science domain based on their interests in various fields. The fields considered in our data include:


- Database Fundamentals
- Computer Architecture
- Distributed Computing Systems
- Cyber Security
- Networking
- Software Development
- Programming Skills
- Project Management
- Computer Forensics Fundamentals
- Technical Communication
- AI ML
- Software Engineering
- Business Analysis
- Communication skills
- Data Science
- Troubleshooting skills
- Graphics Designing

Each user provides scores ranging from 0 to 10 for each field, indicating their interest level. Utilizing this data, our model predicts the most suitable career path for the user based on their interests.

## Implementation

We employ three different algorithms for career prediction:

1. **Logistic Regression:** This algorithm classifies users into different career paths based on their interest scores in various fields.
   ![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/08044f34-5696-4741-953c-ac5c64104db5)

3. **K-Nearest Neighbors (KNN) Model:** The KNN model predicts users' potential career paths by comparing their interest scores with those of similar users in the dataset.
   ![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/44abccb7-e050-4c22-a72a-3b1673afa9e5)

5. **Linear Regression Model:** Linear regression establishes a relationship between users' interest scores and their prospective career paths, allowing for accurate predictions.
   ![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/095e390b-9995-407d-846a-92423eb83ad9)

   

## Data Collection and Preparation

We meticulously collected data from 10 diverse sources, each contributing valuable insights into various aspects of the computer science domain. These sources provided a rich tapestry of information, covering a wide spectrum of topics relevant to career paths in technology.

After gathering data from these sources, we undertook a rigorous process to clean, organize, and integrate the data into a single cohesive dataset. This meticulous approach ensured that our dataset was not only comprehensive but also free from inconsistencies and inaccuracies.
![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/a1576056-2a1a-4c7c-991d-f5391360ec8c)


The final dataset, named `dataset9000.csv`, represents the culmination of our efforts. It contains a staggering 9000 fields of user interests, meticulously merged and curated to provide a comprehensive understanding of individuals' preferences and inclinations within the computer science domain.

## Predictive Model Foundation

This meticulously curated dataset serves as the bedrock for our predictive model, providing a robust foundation upon which accurate career predictions can be made. By leveraging the rich and diverse data contained within `dataset9000.csv`, our model can analyze and interpret users' interests with unparalleled precision and insight.


## Future Enhancements

In the future, we plan to:

- **Website Integration:** Merge the Career Prediction System into our website, allowing users to access it conveniently.
- **Advanced Algorithms:** Explore the use of more complex algorithms such as Random Forest, Gradient Boosting, or Support Vector Machines to further improve prediction accuracy.
- **User Feedback Incorporation:** Incorporate user feedback mechanisms to refine the model continuously and enhance its predictive capabilities.

## Maximum Accuracy

After evaluating the performance of each algorithm, we found that the KNN model achieved the highest accuracy of 97.13144517066085%. This exceptional accuracy underscores the reliability and effectiveness of our predictive approach.
![image](https://github.com/AnivartakJ/Career-Prediction-Model-Career.io-/assets/126934403/d7cb11a0-b1d6-4ac6-8f42-032e13d3b825)

