<?php
    include("header.php");
    include('feedback.php');
    include('myFunctions.php');
?>

<section id="contact-details" class="section-p1">
    <div class="details">
        <h2>Contacteaza-ma</h2>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>Timisoara, Romania</p>
            </li>
            <li>
                <i class="far fa-envelope"></i>
                <p>contact@lumeaprinobiectiv.ro</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>+40 770 915 325</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.6831775620753!2d21.22634367569889!3d45.75749717108026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47456781b7c76ba9%3A0xdf9cdca30597d91!2zUGlhyJthIFVuaXJpaSwgVGltaciZb2FyYQ!5e0!3m2!1sen!2sro!4v1701359642981!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details">
    <div class = "row">
        <div class = "col-md-7">
            <form action="feedback.php" method="POST">
                <span>LASA UN MESAJ</span>
                <h2>Parerea ta este importanta</h2>
                <input type="text" name="nume" value = "<?= $_SESSION['auth_user']['nume'] ?>">
                <input type="text" name="email" value = "<?= $_SESSION['auth_user']['email'] ?>">
                <input type="text" name="subiect" placeholder="Subiect">
                <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj"></textarea>
                <button class="normal" name="feedback-btn">Trimite</button>
            </form>
        </div>
        <div class = "col-md-5">
            <div class="people">
                <div>
                    <img src="photos/utilitare/profile.jpg" alt="">
                    <p><span>Letitia Iliescu</span> Fotograf <br> Telefon: +40 770 915 325 <br> Email: letitia.iliescu@lumeaprinobiectiv.ro</p>
                </div>
                <hr>
                <h4>Comentarii</h4>
                <div>
                    <ul>
                        <?php
                            $comentarii = getFeedback();
                            foreach ($comentarii as $item)
                            {
                                ?>
                                <li>
                                    <?php
                                        if ($item['role_as'] == 0)
                                        {
                                            if ($item['email'] != $_SESSION['auth_user']['email'])
                                            {
                                                ?>
                                                <p><span><?= $item['nume'] ?></span> <strong><?= $item['subiect'] ?></strong> <br> <?= $item['mesaj'] ?> </p>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <p><span>Eu</span> <strong><?= $item['subiect'] ?></strong> <br> <?= $item['mesaj'] ?> </p>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            if ($item['email'] != $_SESSION['auth_user']['email'])
                                            {
                                                ?>
                                                <p><span><?= $item['nume'] ?> (admin)</span> <strong><?= $item['subiect'] ?></strong> <br> <?= $item['mesaj'] ?> </p>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <p><span>Eu</span> <strong><?= $item['subiect'] ?></strong> <br> <?= $item['mesaj'] ?> </p>
                                                <?php
                                            }
                                        }
                                        ?>
                                    <br>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include("footer.php");
?>
