let listLocation = [];

// FIREBASE
const firebaseConfig = {
  apiKey: "AIzaSyCebGipg56isDCAxjEJ1-jJtUXK4wTHERI",
  authDomain: "gis-nanda035.firebaseapp.com",
  databaseURL: "https://gis-nanda035-default-rtdb.firebaseio.com",
  projectId: "gis-nanda035",
  storageBucket: "gis-nanda035.appspot.com",
  messagingSenderId: "633969420544",
  appId: "1:633969420544:web:261c024511c4b1287b2be5",
  measurementId: "G-MRTLET02ZH",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
let database = firebase.database();




//   Read Data from Firebase
database.ref("placeData").on("value", getData);

function getData(snapshoot) {
  let table = ``;
  let number = 1;
  let points = [];
  snapshoot.forEach((element) => {
    console.log(element.val().placeName);
    var data = element.val();
    listLocation.push(data);
    table += `
        <tr>
                <th scope="row">${number}</th>
                <td>${data.placeName}</td>
                <td>${data.description}</td>
                <td>${data.latitude}</td>
              </tr>
        `;
    number++;
    points.push([data.latitude, data.longitude]);
    console.log(element.key);

 



  contentPlaceTable.innerHTML = table;

 
}
  )
}








