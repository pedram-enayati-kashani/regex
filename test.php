<?php 

$patern = "/([a-zA-Z1-9'-]+)|([x{600}-\x{6FF}\x{200c}\x{064b}\x{064d}\x{064c}\x{064e}\x{064f}\x{0650}\x{0651}]+)/u";

$string = "Lorem, ipsum-dolor sit amet consectetur adipisicing elit. Quaerat eos culpa ipsa labore iusto impedit vitae amet aspernatur cupiditate veniam quam, cumque magni! Sapiente, officia magni enim commodi harum numquam.";

echo $string;
echo '<br><hr>';
var_dump(preg_match_all($patern,$string,$matches,PREG_UNMATCHED_AS_NULL ));
echo '<br><hr><pre>';
var_dump($matches);
echo '<br><hr>';

$string = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی-اساسا مورد استفاده قرار گیرد.";

echo $string;
echo '<br><hr>';
var_dump(preg_match_all($patern,$string,$matches,PREG_UNMATCHED_AS_NULL ));
echo '<br><hr><pre>';
var_dump($matches);