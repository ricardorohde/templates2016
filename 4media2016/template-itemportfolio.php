<?php /* template name: portfolio-item */ ?>
<?php get_header() ?>
  <main class="portfolio-interno ">
    <section class="pagina-interna">
      <section class="titulo-paginas">
        <div class="container">
          <h1>PORTFOLIO</h1>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php
            include_once ("sistema/painel/controle/class.conect.php");
            $id = $_GET['portfolio'];

            $conect = new conecta();
            $conect->conect();
            $conect->executa_sql("SELECT * FROM produtos where idprodutos = '$id'");
            $linha_parceiros    = $conect->resultado();
            if(!empty($linha_parceiros['video'])){
            echo "<div class='videoWrapper'>";
                echo $linha_parceiros['video'];
            echo "</div>";
            }
            $portfolio = new conecta();
            $portfolio->conect();
            $portfolio->executa_sql("SELECT * FROM images_produtos where idprodutos = '$id'");
            while($linha_portfolio 	= $portfolio->resultado()){
            echo "<div class='item'>";
              echo "<figure>";
                  echo "<img src='/sistema/imagemSite/".$linha_portfolio['patch']."' alt='' class='img-fluid'>";
              echo "</figure>";
            echo "</div>";
            }
            ?>
          </div>
          <div class="col-md-4">
            <section style="">
                <h2 class="titulo-portfolio"><?php echo utf8_encode($linha_parceiros['nome']) ?></h2>
                <?php echo $linha_parceiros['descricao'] ?>

            </section>
            <ul class="item-details">
                <li class="categories"><?php echo $linha_parceiros['preco'] ?></li>
                <?php if(!empty($linha_parceiros['site_url'])){ ?>
                <li class="url"><a target="_blank" href="<?php echo $linha_parceiros['site_url'] ?>">
                <?php
                $site_name = explode("//", $linha_parceiros['site_url'] );
                echo $site_name[1] ;
                ?>
                </a></li>
                 <?php } ?>

            </ul> <!-- /.item-details -->
            <?php if(!empty($linha_parceiros['facebook'])){ ?>
            <a href="<?php echo $linha_parceiros['facebook'] ?>" style="margin-top:20px; display:block" target="_blank">
              <img src="/sistema/assets/images/face1.png"></a>
            <?php } ?>
          </div>
        </div>

      </div>
    </section>
  </main>
<?php get_footer() ?>
