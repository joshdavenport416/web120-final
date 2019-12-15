<?php include "includes/header.php"?>

        </header>
        <main>
            <h2>Consult with our Design Professional</h2>
            <img class="left" src="images/clay.jpeg" alt="clay">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            
            <img class="right" src="images/card.jpeg" alt="card">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
            <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

        </main>
        
        <aside>
            <h3>Schedule your Consultation Today</h3>
            <form action="formhandler.php" method="post">
                <fieldset>
                    <legend>Your Info</legend>
                    <label>First Name</label>
                    <input type="text" name="first-name" placeholder="Enter your first name">
                    <label>Last Name</label>
                    <input type="text" name="last-name" placeholder="Enter your last name">
                    <label>Email</label>
                    <input type="email" name="email" required="required" placeholder="Enter your email">
                    <label>City</label>
                    <input type="text" name="city" placeholder="Enter your City">
                    
                    <label>Select your State</label>
                    <select>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </fieldset>
                <fieldset>
                    <legend>Consultation Type</legend>
                    <ul>
                        <li><input type="radio" name="consultation" value="in-person">In Person</li>
                        <li><input type="radio" name="consultation" value="skype">Skype</li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>Select Services</legend>
                    <ul>
                        <li><input type="checkbox" name="service[]" value="the rumble">The Rumble (consultation)</li>
                        <li><input type="checkbox" name="service[]" value="collaboration">Re-Style (Collaborations)</li>
                        <li><input type="checkbox" name="service[]" value="trust">Re-Style (Re-Style)</li>
                    </ul>
                    <label class="comments">Comments</label>
                    <textarea name="comments" placeholder="Add comments here"></textarea>
                    <input type="submit" value="Submit"> 
                </fieldset>      
            </form> 
        </aside>

<?php include "includes/footer.php"?> 