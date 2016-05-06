<?php /* template name: portfolio */ ?>
<?php get_header(); ?>
<!-- Bootstrap Core CSS -->
<?php
  include_once ("sistema/painel/controle/class.conect.php");
?>
  <main>
    <section id="more-works" class="pagina-interna">
      <section class="titulo-paginas">
        <div class="container">
          <h1><?php the_title() ?></h1>
        </div>
      </section>
        <div class="container inner-top-md inner-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel-group blank">
                        <div class="panel panel-default">
                            <div id="content" class="panel-collapse in">
                                <div class="panel-body">
                                    <div class="portfolio">
                                        <ul class="items col-4">
                                            <?php
                        										$portfolio = new conecta();
                        										$portfolio->conect();
                        										$portfolio->executa_sql("select * from produtos where categoria_produto = 3 order by ordem ");
                        										while($linha_portfolio 	= $portfolio->resultado()){
				                                    ?>
                                            <li class="item thumb <?php echo $linha_portfolio['cor']." ".$linha_portfolio['pdf']." ".$linha_portfolio['habilitado'] ?>">
                                                <a href="<?php echo esc_url( home_url( 'portfolio-item' ) ); ?>?portfolio=<?php echo $linha_portfolio['idprodutos'] ?>&portfolio-item=<?php echo str_replace("","-",$linha_portfolio['nome']); ?>)">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4><?php echo utf8_encode($linha_portfolio['nome']) ?></h4>
                                                            </div><!-- /.info -->
                                                        </figcaption>
                                                        <img src="/sistema/imagemSite/<?php echo $linha_portfolio['patch'] ?>"
                                                         alt="" class="img-fluid">
                                                    </figure>
                                                </a>
                                            </li><!-- /.item -->
                                            <?php
    										                      }
    										                    ?>
                                        </ul><!-- /.items -->
                                    </div><!-- /.portfolio -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.content -->
                        </div><!-- /.panel -->
                    </div><!-- /.accordion -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
  </main>
<?php get_footer() ?>
