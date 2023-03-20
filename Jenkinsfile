pipeline{
    agent any
    stages{
        stage("Building"){
            steps{
                sh `docker build -t todo-app:latest`
                echo "Building the application Image"
            }
        }
        stages("Pushing"){
            steps{
                sh `docker push -t todo-app:latest`
            }
        }
        stages("Deploying"){
            steps{
                sh `docker run -d -p 3000:3000 -t todo-app:latest`
            }
        }
    }
}