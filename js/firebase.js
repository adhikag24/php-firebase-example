import {
    initializeApp
} from "https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js";

import {
    getDatabase,
    ref,
    onValue
} from "https://cdnjs.cloudflare.com/ajax/libs/firebase/9.5.0/firebase-database.min.js"

const firebaseConfig = {
    apiKey: "YOUR_PRIVATE_KEY",
    authDomain: "YOUR_DATA",
    databaseURL: "YOUR_DATA",
    projectId: "YOUR_DATA",
    storageBucket: "YOUR_DATA",
    messagingSenderId: "YOUR_DATA",
    appId: "YOUR_DATA",
    measurementId: "YOUR_DATA"
};



//initalize firebase
const app = initializeApp(firebaseConfig)

//create database instance
const database = getDatabase(app);

export{
    app,
    getDatabase,
    onValue,
    database,
    ref,
}