<style>
    
</style>


<h2 class="text-center  wowload bounceInRight">Reservas</h2>

<div class="row wowload fadeInLeftBig">
    <div class="col-sm-6 col-sm-offset-3 col-xs-12">
        <form action="../PHP/resultado_reserva.php" id="reservar" method = "post">
            <div>
                <input type="text" name="name" data-pattern="alpha" placeholder="Nombre" required>
            </div>
            <div><input type="text" name="email" data-pattern="email" placeholder="E-mail" required></div>
            <div><input type="text" id="date"  data-pattern="time" name="date" placeholder="Que dia nos visitaras?" required></div>
            <div><input type="text" id="time"  data-pattern="time" name="time" placeholder="Elige la hora" required></div>
            <!--<select name="time"  required>
                <optgroup label="Comida">

                    <option>13:00</option>
                    <option>13:30</option>
                    <option>14:00</option>
                    <option>14:30</option>
                    <option>15:00</option>
                    <option>15:30</option>



                </optgroup>
                <optgroup label="Cena">

                    <option>20:30</option>
                    <option>21:00</option>
                    <option>21:30</option>
                    <option>22:00</option>
                    <option>22:30</option>
                    <option>23:00</option>
                    <option>23:30</option>


                </optgroup>
            </select>-->

            <div><input type="number" name="people" data-pattern="num" min="1" max="40" placeholder="Nº de Personas" required></div>
        </form>
        <button type="submit" form="reservar" class="btn btn-primary btn-xs"><i class="fa fa-book"></i> Reservar
        </button>
    </div>
</div>
