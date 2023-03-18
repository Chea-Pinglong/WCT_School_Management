<!DOCTYPE html>
<html lang="en">
<head>
    <!---------------------- css --------------------->
    <style>
   
        h2{
         font-family: Sans-serif; 
         font-size: 24px;     
         font-style: normal; 
         font-weight: bold; 
         color: black;
         text-align: center; 
         text-decoration: underline
        }
        table{
         font-family: verdana; 
         color:black; 
         font-size: 16px; 
         font-style: normal;
         font-weight: bold;
         background: linear-gradient(to bottom, #cccecf 0%, #c4bec2 100%);  
         border-style: hidden;
          
        }
        table.inner{
         border: 10px
        }
        input[type=text], input[type=email], input[type=number]{
         width: 50%;
         padding: 6px 12px;
         margin: 5px 0;
         box-sizing: border-box;
        }
        input[type=Login]{
         width: 20%;
         padding: 10px 30px;
         margin: 10px 10px;
         box-sizing: border-box;
         border: 1px solid black;
         box-shadow: inset 150px 0 0 0 white;
         display: inline-block;
         cursor: pointer;
         border-radius: 50px;
        }
        </style>
        
    <title>Student Register</title>
</head>
<body>

    <div>
        
    </div>
    <a href="{{route('/')}}">
        <h3>
            Return to Login
        </h3>
    </a>
    <h2 style="text-align: center;">Student Register Form</h2>

    <table align="center" cellpadding = "10">
        <!-------------- First Name -------------------->
        <form action="">
            <p>
            <tr>
            <td>First Name</td>
            <td>
                <input type="text" name="FirstName" maxlength="100" placeholder="Enter First Name" required>
            </td>
        </tr>
    </p>
        <!-------------- Last Name -------------------->
    <p>
        <tr>
            <td>Last Name</td>
            <td>
                <input type="text" name="LastName" maxlength="100" placeholder="Enter Last Name" required>
            </td>
        </tr>
    </p>
        <!-------------- Email ID -------------------->
    <p>
        <tr>
            <td>Email </td>
            <td>
                <input type="email" name="Email" maxlength="100" placeholder="Enter Your Email" required>
            </td>
        </tr>
    </p>
        <!-------------- Mobile Phone -------------------->
        <tr>
            <td>Mobile Phone</td>
            <td>
                <input type="text" name="MobileNumber" id="10" placeholder="Enter Your Number" required>
            </td>
        </tr>
        <!-------------- Gender -------------------->
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="Gender" value="Male" required/>
                Male
                <input type="radio" name="Gender" value="Female" />
                Female
            </td>
        </tr>
        <!-------------- Date of Birth -------------------->
        <tr>
            <td>Date of Birth</td>
            <td>
                <select name="BirthDay" id="BirthDay_Day" required>
                    <option value="-1">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="BirthdayMonth" id="Birthday_Month" required>
                    <option value="-1">Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <select name="BirthdayYear" id="Birthday_Year" required>
                    <option value="-1">Year</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                </select>
            </td>
        </tr>
        <!-------------- Address -------------------->
        <tr>
            <td>Address<br /><br /><br /></td>
            <td>
                <textarea name="Address" cols="50" rows="10" required>

                </textarea>
            </td>
        </tr>
        <!-------------- City -------------------->
        <tr>
            <td>City</td>
            <td>
                <input type="text" name="City" maxlength="100" placeholder="Enter Your City" required>
            </td>
        </tr>
        <!-------------- Country -------------------->
        <tr>
            <td>Country</td>
            <td>
                <input type="text" name="Country" placeholder="Enter Your Country" required>
            </td>
        </tr>
        <!-------------- Qualification -------------------->
        <tr>
            <td>Qualification</td>
            <td>
                <select name="Qualification" id="Qualification" required>
                    <option value="-1">Select for Qualification</option>
                    <option value="Graduation(Bachelors)">Graduation(Bachelors)</option>
                    <option value="Post Graduation(Masters)">Post Graduation(Masters)</option>
                    <option value="phd">PhD</option>
                </select>
            </td>
        </tr>
        <!-------------- Qualification -------------------->
        <tr>
            <td>Courses</td>
            <td>
                <select name="Courses" id="courses" required>
                    <option value="-1">All Courses</option>
                    <option value="Department of Biology">Department of Biology</option>
                    <option value="Department of Chemistry">Department of Chemistry</option>
                    <option value="Department of History">Department of History</option>
                    <option value="Department of Khmer Literature">Department of Khmer Literature</option>
                    <option value="Department of Computer Science">Department of Computer Science</option>
                    <option value="Department of Information Technology Engineering">Department of Information Technology Engineering</option>
                    <option value="Department of English, IFL">Department of English, IFL</option>
                    <option value="Department of French, IFL">Department of French, IFL</option>
                </select>
            </td>
        </tr>
        <!-------------- Submit and Reset -------------------->
        <tr>
            <td colspan="2" align="center">
                <p>
                <a href="{{route('/')}}">
                    <input type="Submit" value="Submit">
                </a>
            </p>
            </td>
        </tr>
        </form>
    </table>
</body>
</html>