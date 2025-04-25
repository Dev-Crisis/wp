<form class="form-contact" method="post">
    <?php
    
    // FIRST NAME GROUPE
    $first_name_key = 'last_name';
    get_part('input', 'group', ['label' => ['text' => 'First Name', 'for' => $first_name_key], 'input' => ['unique' => $first_name_key, 'placeholder' => 'John Doe']]);
    get_part('input', 'group', ['label' => ['text' => 'Last Name', 'for' => $first_name_key], 'input' => ['unique' => $first_name_key, 'placeholder' => 'John Doe']]);

    ?>

    <button type="submit" class="send">Envoyer</button>
</form>