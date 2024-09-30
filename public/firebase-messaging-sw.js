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
