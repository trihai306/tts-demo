/*
// Import the scripts for Firebase Cloud Messaging
importScripts('https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.10.1/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the messagingSenderId.
firebase.initializeApp({
    apiKey: "AIzaSyDoTxLGWoZWj6cgh2fAi2KYPW1N7FDvwbE",
    authDomain: "toanthinh-c4f70.firebaseapp.com",
    projectId: "toanthinh-c4f70",
    storageBucket: "toanthinh-c4f70.appspot.com",
    messagingSenderId: "688027624511",
    appId: "1:688027624511:web:0038d8e7832a360783048a",
    measurementId: "G-540S06CX36"
});

// Retrieve an instance of Firebase Messaging so that it can handle background messages.
const messaging = firebase.messaging();

// Optional: Add background message handler
messaging.onBackgroundMessage(function(payload) {
    // Customize notification here
});
//
*/

const admin = require('firebase-admin');

// Initialize Firebase
const serviceAccount = require('./serviceaccount.json');

admin.initializeApp({
    credential: admin.credential.cert(serviceAccount)
});

const messaging = admin.messaging();

async function sendFirebaseNotification(title, body, data, deviceToken) {
    // Create a message with a notification
    const message = {
        notification: {
            title: title,
            body: body
        },
        data: data,
        token: deviceToken
    };

    // Send the message
    try {
        const response = await messaging.send(message);
        console.log('Message sent successfully:', response);
    } catch (error) {
        console.log('Failed to send message:', error);
    }
}

// Example usage
const deviceToken = 'fUQSbW1UlflwZsjxNZAO91:APA91bGKkUP2_kwyIjo6Tv7VEF_Gkct3N9l-1yqzzsb4155-5UuLLBCKzZNk3i1CTc4iEDRgcaUsOvqi6R5z1yJcQM-i1C-2uxDShlQdnKwIAZO_r61MyQ0JcN-_QfwbJAtjLyRZgPZa';
const title = 'Hello, World!';
const body = 'This is a notification example.';
const data = {key: 'value'};

sendFirebaseNotification(title, body, data, deviceToken);
