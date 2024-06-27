<?php
/*
Template Name: recruit
*/
?>

<?php 
	// 採用情報ページの$post_id
	$post_id = 14;
    $recruit_data = get_field_objects($post_id);
	$work_data = get_field_object("rct_work_contents", $post_id);
	$work_content = $work_data["value"]
?>

<?php get_header(); ?>
<div id="container" class="three-columns-sided">
    <main id="main" class="main">
        <article
            <?php post_class( 'hentry' ); cryout_schema_microdata( 'blogpost' ); ?>>
            <div class="article-inner">
                <header class="entry-header">
                    <h1 class="entry-title"><?php echo the_title(); ?></h1>
                </header>
                <div class="entry-content" <?php cryout_schema_microdata( 'entry-content' ); ?>>
                    <div class="mb-2">
                        <p class="text-center">
                            <span class="sub-ttl sub-underline">仕事内容</span></p>
                        <div class="p-15">
                            <ul class="recruit-ul">
                                <?php foreach ($work_content as $content) : ?>
                                <li><?php echo $content ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <p class="text-center">
                            <span class="sub-ttl sub-underline">システム開発エンジニアの募集要項</span>
                        </p>
                        <div>
                            <?php if (!empty($recruit_data)) : ?>
                            <table>
                                <tbody>
                                    <?php foreach ($recruit_data as $data) : ?>
                                    <?php if ($data["name"] != "rct_work_contents") : ?>
                                    <tr>
                                        <th class="vertical-center"><?php echo $data["label"] ?></th>
                                        <td><?php echo $data["value"] ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
</div>
<?php get_footer(); ?>