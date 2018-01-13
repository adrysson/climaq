<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;
?>
<!-- Page specific css -->
<?= $this->Html->css('home.css') ?>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Bem-vindo ao <strong>Climaq</strong></h1>
    <p>Aqui você possui informações sobre a previsão do tempo de sua cidade em tempo real!</p>
    <a href="#services-section" class="btn btn-default btn-lg page-scroll">Pesquisar cidade</a> </div>
</header>

<!-- Services Section -->
<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Our Services</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus. Eleifend pellentesque natoque faucibus magna ut etiam.</p>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-desktop"></i>
        <h4>Web Design</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-gears"></i>
        <h4>App Development</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-rocket"></i>
        <h4>Branding</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-line-chart"></i>
        <h4>Marketing</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Our Portfolio</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web Design</a></li>
            <li><a href="#" data-filter=".app">App Development</a></li>
            <li><a href="#" data-filter=".branding">Branding</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/01.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/03.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Branding</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development, Branding</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/08.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Us</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="row">
      <div class="col-md-6"> <img src="img/about.jpg" class="img-responsive"> </div>
      <div class="col-md-6">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
          <h4>What We Do</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
          <h4>Why Choose Us</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="section dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">210</span>
          <h4>Happy clients</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">9,500</span>
          <h4>Working hours</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">590</span>
          <h4>Projects completed</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">14</span>
          <h4>Awards won</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Meet the Team</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>John Doe</h3>
            <p>Founder / CEO</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Mike Doe</h3>
            <p>Web Designer</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Jane Doe</h3>
            <p>Creative Director</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Larry Show</h3>
            <p>Project Manager</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker"></i>
        <p>4321 California St,<br>
          San Francisco, CA 12345</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o"></i>
        <p>info@company.com</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone"></i>
        <p> +1 123 456 1234</p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>
</div>
