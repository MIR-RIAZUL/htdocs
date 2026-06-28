let attempts = 0;
const targetScore = 100;

function checkStrength()
{
    let password = document.getElementById("password").value;
    let score = 0;
    attempts++;

    // Length (Minimum 6)
    if(password.length >= 6)
    {
        score += Math.floor(password.length / 2) * 10;
    }

    // Uppercase
    if(/[A-Z]/.test(password))
    {
        score += 15;
    }

    // Lowercase
    if(/[a-z]/.test(password))
    {
        score += 15;
    }

    // Number
    if(/[0-9]/.test(password))
    {
        score += 20;
    }

    // Special Character
    if(/[!@#$%^&*]/.test(password))
    {
        score += 25;
    }

    let strength = "";

    if(score <= 30)
    {
        strength = "Very Weak";
    }
    else if(score <= 50)
    {
        strength = "Weak";
    }
    else if(score <= 70)
    {
        strength = "Medium";
    }
    else if(score <= 90)
    {
        strength = "Strong";
    }
    else
    {
        strength = "Very Strong";
    }

    document.getElementById("result").innerHTML =
    "Score: " + score +
    "<br>Strength: " + strength +
    "<br>Attempts: " + attempts;

    // Perfect Password
    if(score >= targetScore)
    {
        document.getElementById("message").innerHTML =
        "🎉 Perfect Password! Success!";
    }
    // More than 8 attempts and not Strong
    else if(attempts > 8 && score <= 70)
    {
        document.getElementById("message").innerHTML =
        "Need practice!<br>" +
        "Tips:<br>" +
        "✔ Use uppercase letters<br>" +
        "✔ Use lowercase letters<br>" +
        "✔ Use numbers<br>" +
        "✔ Use special characters<br>" +
        "✔ Make password longer";
    }
    else
    {
        document.getElementById("message").innerHTML = "";
    }
}