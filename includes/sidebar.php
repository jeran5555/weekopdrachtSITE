<div id="sidebar">
    <div data-role="page">
        <div data-role="header">
            <h1>Prijs Verschil</h1>
        </div>

        <div data-role="main" class="ui-content">
            <form method="post" action="/action_page_post.php">


                <div data-role="rangeslider">
                    <label for="price-min">Price:</label>
                    <input type="range" name="price-min" id="price-min" value="200" min="0" max="10000">
                    <label for="price-max">to</label>
                    <input type="range" name="price-max" id="price-max" value="800" min="0" max="10000">
                </div>

                <br><br>


                <label>Categories:</label><br>
                <input type="checkbox" name="category[]" value="jackets"> Jackets<br>
                <input type="checkbox" name="category[]" value="hoodies"> Hoodies<br>
                <input type="checkbox" name="category[]" value="sweaters"> Sweaters<br>
                <input type="checkbox" name="category[]" value="pants"> Pants<br>

                <br>


                <label>Size:</label><br>
                <input type="checkbox" name="size[]" value="S"> S<br>
                <input type="checkbox" name="size[]" value="M"> M<br>
                <input type="checkbox" name="size[]" value="L"> L<br>
                <input type="checkbox" name="size[]" value="XL"> XL<br>

                <br>


                <label for="brand">Brand:</label><br>
                <select name="brand" id="brand">
                    <option value="">-- Select a brand --</option>
                    <option value="balenciaga">Balenciaga</option>
                    <option value="chromehearts">Chrome Hearts</option>
                    <option value="vetements">Vetements</option>
                    <option value="margiela">Maison Margiela</option>
                    <option value="raf">RAF Simons</option>
                </select>

                <br><br>


                <label>Color:</label><br>
                <input type="checkbox" name="color[]" value="black"> Black<br>
                <input type="checkbox" name="color[]" value="white"> White<br>
                <input type="checkbox" name="color[]" value="red"> Red<br>
                <input type="checkbox" name="color[]" value="blue"> Blue<br>

                <br>

                <input type="submit" value="Filteren">
            </form>
        </div>
    </div>
</div>