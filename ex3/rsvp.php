<section>

    <div id="formdiv" align="center">

        <div class="frame">
            <h4>Sign up today</h4>


            <form method="post">
                <ul>
                    <li>full name:</li>
                    <input name="firstname" >
                    <li>Phone:</li>
                    <input  name="phone"  >

                    <li>Email:</li>
                    <input name="email" id="exampleFormControlInput1" placeholder="name@example.com" >
                    <li>Number of guest:</li>
                    <input type="number" name="numofguests" min="0"  placeholder="0" >
                    <li>arrival method</li>
                    <input list="browsers" name="browser" >
                    <datalist id="browsers" >
                        <option value="car">
                        <option value="bus">
                        <option value="shutle">
                    </datalist>
                    <li>Additional Comments</li>
                    <div><textarea id="comments" name ="comments" onkeyup="updateCounter(this)" maxlength="200" rows="4" cols="25" >
        </textarea>
                        <p class="pull-right" id="counter">200 Characters remaining</p></div>

                    <li><button type="submit" class="btn btn-primary" >Submit</button></li>
                </ul>

            </form>
        </div>

    </div>

</section>
