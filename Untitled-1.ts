<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBYjJJAaZf3ZhpPgqKwk9jphduiPHEfLJM",
    authDomain: "demootp-57813.firebaseapp.com",
    projectId: "demootp-57813",
    storageBucket: "demootp-57813.appspot.com",
    messagingSenderId: "565776032136",
    appId: "1:565776032136:web:9b88fbeffbf3c91ea19a3d",
    measurementId: "G-Y9PB2FL5CP"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>