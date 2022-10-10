<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo home_url(); ?></title>
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣の
コーチング型TOEFLスクール">
  <link rel="shortcut icon" href="">

  <?php wp_head(); ?>
</head>

<header>
  <div class="header">
    <div>
      a
    </div>
    <div class="header-inner">
      <nav class="inner-nav">
        <h1 class="site-title">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="http://engress.local/wp-content/themes/engress/img/logo.png">
          </a>
        </h1>
        <ul>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/service/')); ?>">コース・料金</a>
          </li>
        </ul>
      </nav>
      <div class="inner-contact">
        <ul>
          <li>
            <div class="inner-contact__ap">
              <div class="inner-contact__time">
                平日08:00〜20:00
              </div>
              <div class="inner-contact__tel">
                <a href="tel:01234567890" class="inner-contact__tel__number">
                  <img src="http://engress.local/wp-content/themes/engress/img/tel.png">
                  <span>
                    0123-456-789
                  </span>
                </a>
              </div>
            </div>
          </li>
          <li class="inner-contact__request-btn">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
              資料請求
            </a>
          </li>
          <li class="inner-contact__contact-btn">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
              お問い合わせ
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>