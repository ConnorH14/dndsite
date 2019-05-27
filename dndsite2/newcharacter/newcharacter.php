<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/newcharacter.css" media='screen and (min-width: 1200px)' rel="stylesheet">
    <link href="../css/newcharacter-mobile.css" media='screen and (max-width: 1199px)' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Fjalla+One|Josefin+Sans|Montaga|Muli|Playfair+Display|Stylish&display=swap" rel="stylesheet">
    <title>Lunar New Character</title>
</head>
<body class="grid-container">
    <!-- Header -->

    <div class="header-style header-center grid-div">
        <img class="logo-style" src="../images/logo4.png" alt="logo">
        <br>
        <a href="../portal/portal.php"><input type="submit" value="Go Back"></a>
    </div>

    <!-- Login Section -->
    <div class="main main-style grid-div">
        <h1>Let's Creat a Character $name!</h1>
    </div>

    <div class="content content-style">
        <form action="#">
            <table class="creator-style">
                <tr class="identity-style">
                    <td><h2>Character Name</h2></td>
                    <td><h2>Class</h2></td>
                    <td><h2>Race</h2></td>
                    <td><h2>Player Name</h2></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder="$name"></td>
                </tr>
                <tr class="identity-style">
                    <td><h2>Race</h2></td>
                    <td><h2>Alignment</h2></td>
                    <td><h2>Background</h2></td>
                    <td><h2>Experience</h2></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="prof-key"><h2>Skill Proficiencies Key:</h2></td>
                    <td class="prof-key"><h2>First Check = Proficient</h2></td>
                    <td class="prof-key"><h2>Second Check = Double Proficient</h2></td>
                </tr>
                <tr>
                    <td class="ability-style"><h2>Strength</h2></td>
                    <td class="skill-style"><h2>Acrobatics</h2></td>
                    <td class="skill-style"><h2>Animal Handling</h2></td>
                    <td class="skill-style"><h2>Arcana</h2></td>

                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    <td>
                        <input type="radio" name="prof-acro" value="">
                        <input type="radio" name="dub-prof-acro" value="">
                    </td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Dexterity</h2></td>
                    <td class="skill-style"><h2>Athletics</h2></td>
                    <td class="skill-style"><h2>Deception</h2></td>
                    <td class="skill-style"><h2>History</h2></td>
                    
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Constitution</h2></td>
                    <td class="skill-style"><h2>Insight</h2></td>
                    <td class="skill-style"><h2>Indimidation</h2></td>
                    <td class="skill-style"><h2>Investigation</h2></td>
                    
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Intelligence</h2></td>
                    <td class="skill-style"><h2>Medicine</h2></td>
                    <td class="skill-style"><h2>Nature</h2></td>
                    <td class="skill-style"><h2>Perception</h2></td>
                    
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Wisdom</h2></td>
                    <td class="skill-style"><h2>Performance</h2></td>
                    <td class="skill-style"><h2>Persuasion</h2></td>
                    <td class="skill-style"><h2>Religion</h2></td>
                    
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>

                </tr>
                <tr>
                    <td class="ability-style"><h2>Charisma</h2></td>
                    <td class="skill-style"><h2>Sleight of Hand</h2></td>
                    <td class="skill-style"><h2>Stealth</h2></td>
                    <td class="skill-style"><h2>Survival</h2></td>
                    
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    
                </tr>
                
            </table>
        </form>    
    </div>

    <div class="footer grid-div">
        <a style="text-decoration: none; color: white;" href="../portal/portal.php"><h4>Created By: Connor H | Alex P | Summer 2019</h4></a>
    </div>

</body>
</html>