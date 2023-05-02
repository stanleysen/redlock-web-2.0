pipeline {
  agent any
  
  stages {
    stage('Checkout') {
      steps {
        checkout scm
      }
    }
    
    stage('doc-compose up') {
      steps {
        sh 'docker-compose up -d'
      }
    }
    
    stage('Add PHP File') {
      steps {
        sh 'docker cp count_users.php $(docker-compose ps -q redlock-web-2.0):/var/www/html/'
      }
    }
  }
  
  post {
    always {
      sh 'docker-compose down'
    }
  }
}
