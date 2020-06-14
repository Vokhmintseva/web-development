<form method="POST" class="form">
  <div class="form_item">
    <label for="name" class="label">Ваше имя<span class="star"> *</span></label>
    <input type="text" class="cell <?php echo $args['nameError'] ?? ''; ?>" id="name" name="name"
           value="<?php echo $args['name'] ?? ''; ?>" required>
  </div>
  <div class="form_item">
    <label for="email" class="label">Ваш email<span class="star"> *</span></label>
    <input type="email" class="cell <?php echo $args['emailError'] ?? ''; ?>" id="email" name="email"
           value="<?php echo $args['email'] ?? ''; ?>" required>
  </div>
  <div class="form_item">
    <label for="country" class="label label_country">Откуда вы?</label>
    <div class="cell new_select_style">
      <img src="images/arrow.png" alt="arrow" class="arrow_image">
      <select id="country" size="1" name="country" class="select">
        <option <?php if (($args['country'] ?? '')=="Russia" || !isset($args['country'])) echo 'selected'; ?>
            value="Russia">Россия
        </option>
        <option <?php if (($args['country'] ?? '')=="France") echo 'selected'; ?> value="France">Франция</option>
        <option <?php if (($args['country'] ?? '')=="Italy") echo 'selected'; ?> value="Italy">Италия</option>
      </select>
    </div>
  </div>
  <div class="form_item form_item_gender">
    <div class="label label_gender">Ваш пол</div>
    <div class="radio">
      <input type="radio" name="gender" id="male"
             value="male" <?php if (($args['gender'] ?? '')=="male" || !isset($args['gender'])) echo 'checked'; ?>
             class="circle">
      <label for="male" class="gender">Мужской</label>
      <input type="radio" name="gender"
             id="female" <?php if (($args['gender'] ?? '')=="female") echo 'checked'; ?>
             value="female" class="circle">
      <label for="female" class="gender gender_female">Женский</label>
    </div>
  </div>
  <div class="form_item">
    <label for="message" class="label">Ваше сообщение<span class="star"> *</span></label>
    <textarea class="message" id="message" name="message" required><?php echo $args['message'] ?? ''; ?></textarea>
  </div>
  <input type="submit" class="button submit_button">
  <div class="label"><?php echo $args['result'] ?? ''; ?></div>
</form>
