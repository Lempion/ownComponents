<main class="container px-5 py-15">
    <form method="post" action="../edit/<?php echo $note['id']; ?>">

        <h1 class="h3 mb-3 mt-3 fw-normal">Изменение заметки</h1>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="Название" name="title"
                   value="<?php echo $note['title']; ?>">
            <label for="floatingInput">Название</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingText" placeholder="Текст" name="text"
                   value="<?php echo $note['text'] ?>">
            <label for="floatingText">Текст</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Сохранить</button>

    </form>
</main>