let result = document.getElementById("result");
let searchBtn = document.getElementById("search-btn");
let cityRef = document.getElementById("city");
let dateElement = document.getElementById("date");
let today = new Date();
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

// Function to fetch weather details from API and display
let weather = {
  fetchWeather: function (city) {
    const apiKey = "39856be6a95ec37d516174d366a392c8";
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;

    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
        console.log("Fetched Data from API");
        displayWeather(data);
        document.getElementById('viewdt').addEventListener('click',()=>{
          viewdata(data.name);
        })
      })
      .catch(() => {
        alert("Error: No weather found.");
      });
  },
  displayWeather: function (data) {
    const { name } = data;
    const { icon, description } = data.weather[0];
    const { temp, humidity } = data.main;
    const { speed } = data.wind;
    console.log("display Weather is running");

    document.querySelector(".city").innerText = "Weather in " + name;
    document.querySelector(".icon").src =
      "https://openweathermap.org/img/wn/" + icon + ".png";
    document.querySelector(".description").innerText = description;
    document.querySelector(".temp").innerText = temp + "°C";
    document.querySelector(".humidity").innerText =
      "Humidity: " + humidity + "%";
    document.querySelector(".wind").innerText =
      "Wind speed: " + speed + " km/h";
    document.querySelector(".weather").classList.remove("loading");
    document.body.style.backgroundImage =
      name.toLowerCase() !== "kirklees"
        ? "url('https://source.unsplash.com/1600x900/?" + name + "')"







        : "none";
  },
  search: function () {
    const city = document.querySelector(".search-bar").value;
    this.fetchWeather(city);
  },
};

document.querySelector(".search button").addEventListener("click", function () {
  weather.search();
});

document.querySelector(".search-bar").addEventListener("keyup", function (event) {
  if (event.key === "Enter") {
    weather.search();
  }
});

function viewdata(cityname){
  console.log("VIEWDATA: Running")
  var form = document.createElement('form');
  form.method = 'POST';
  form.action = 'hellow.php';

  var hiddenField = document.createElement('input');
  hiddenField.type = 'hidden';
  hiddenField.name = 'cityname';
  hiddenField.value = cityname;

  form.appendChild(hiddenField);
  document.body.appendChild(form);

  form.submit();

  document.body.removeChild(form);
}

weather.fetchWeather("Kirklees");

// Update the date element
dateElement.innerText = today.toLocaleDateString("en-US", options);