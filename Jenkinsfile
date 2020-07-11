#!/usr/bin/env/groovy

node('master'){
    try{
        stage('build'){
            checkout scm
            sh "composer install"
            sh  "npm install"
        }
        stage('test'){
            sh "./vendor/bin/phpunit"
        }
        stage('deploy'){
            sh "echo 'Estamos deployando'"
        }
    }catch{

    }finally{

    }
}
