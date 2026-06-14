$(document).ready(function () {

    // --- Welcome message ---
    let lastVisit = localStorage.getItem("lastVisit");
    if (lastVisit === null) {
        $("#welcomeMessage").text("Welcome to my homepage for the first time!");
    } else {
        $("#welcomeMessage").text("Welcome back! Your last visit was " + lastVisit);
    }
    localStorage.setItem("lastVisit", new Date().toString());

    // --- Digital clock ---
    function updateClock() {
        $("#digital-clock").text(new Date().toLocaleTimeString());
    }
    updateClock();
    setInterval(updateClock, 1000);

    // --- Show/hide email ---
    $("#emailButton").click(function () {
        $("#email").toggle();
    });

    // --- Show/hide bio ---
    $("#bioButton").click(function () {
        $("#bio").slideToggle();
    });

    // --- Joke API ---
    function getJoke() {
        fetch("https://v2.jokeapi.dev/joke/Any")
            .then(response => {
                if (!response.ok) throw new Error("Failed to load joke");
                return response.json();
            })
            .then(data => {
                if (data.type === "single") {
                    $("#joke").html(data.joke);
                } else {
                    $("#joke").html("<strong>" + data.setup + "</strong><br><br>" + data.delivery);
                }
            })
            .catch(error => {
                console.error("Joke API Error:", error);
                $("#joke").html("Unable to load joke.");
            });
    }
    getJoke();
    setInterval(getJoke, 60000);

    // --- Dog image API ---
    function getDog() {
        fetch("https://dog.ceo/api/breeds/image/random")
            .then(response => {
                if (!response.ok) throw new Error("Failed to load image");
                return response.json();
            })
            .then(data => {
                $("#dogImage").attr("src", data.message);
            })
            .catch(error => {
                console.error("Dog API Error:", error);
                $("#dogImage").replaceWith("<p>Unable to load image.</p>");
            });
    }
    getDog();

});
