<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
    $lang_code = ICL_LANGUAGE_CODE;
  }
?>


<img id="load-img-1" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-1-3.png" alt="">
<img id="load-img-2" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-2.png" alt="">
<img id="load-img-3" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-3.png" alt="">
<img id="load-img-4" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-4-1.png" alt="">

<img id="load-img-5" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-5.png" alt="">
<img id="load-img-6" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-6.png" alt="">
<img id="load-img-7" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-5-en.png" alt="">
<img id="load-img-8" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-6-en.png" alt="">

<img id="load-img-9" class="load-img d-none" style="opacity:0;" class="w-100"
    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-4.gif" alt="">





<section class="sec1 pt-const2">

    <div class="container">

        <div class="text-center  fadeindown-ele">
            <h1 class="mx-auto gold">
                <?php echo get_field('content_part_0');?>
                <!-- IVA 個人自願安排/債務重組 -->
            </h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>


        <div class="text-center">


            <div class="iva-benefits-animation-div">

                <img class="load-img w-100" style="opacity:0;"
                    src="https://unionus.com.hk/wp-content/uploads/2022/08/iva-layer-5.png" alt="">
                <div class="layer layer-1"></div>
                <div class="layer layer-2"></div>
                <div class="layer layer-3"></div>
                <div class="layer layer-4"></div>
                <div class="layer layer-5"></div>
                <div class="layer layer-6"></div>

            </div>

        </div>


        <div class="inner-container2 mx-auto mt-5 text-start fadeinup-ele">
            <?php echo get_field('content_part_1');?>

            <!-- 根據破產條例第6章第20條，個人自願安排 (Individual Voluntary Arrangement，IVA 債務重組)
            是面臨破產之人士的另一個選擇。債務人須委任代名人向其債權人提出償還債項建議，經過法庭聆訊及頒佈臨時命令，並獲債權人通過其建議書，確保債務人在合理負擔的情況下，妥善解決債務問題。
            委任有經驗的代名人去處理債務重組安排為整個申請成敗之關鍵。以往的IVA代名人都是由破產管理署署長擔任。自2002年9月開始，具法院認可其資格及經驗能勝任處理債務重組的都是執業會計師。 <br>
            保證客戶資料絕不外流，所有文件藉由執業律師/會計師處理,百分百信心保障。 -->


        </div>

        <div class="mt-5 inner-container2 mx-auto fadein-ele">
            <?php echo get_field('content_part_2');?>

            <!-- <h2 class="gold">申請資格</h2>

            <div class="mt-4">
                <h3 class="gold">IVA適合以下人士:</h3>
                <ul>
                    <li>有較穩定收入而欠債超過月薪十多倍以上的債務人士</li>
                    <li>敏感職業而不能申請破產的債務人士</li>
                </ul>
            </div>

            <div class="mt-4">
                <h3 class="gold">IVA可重組以下之債務:</h3>
                <ul>
                    <li>卡數｜銀行私人貸款｜財務公司貸款｜"一筆清"高息貸款｜儲蓄互助社貸款｜學生資助貸款｜稅項｜商業貸款
                    </li>
                </ul>
            </div> -->


        </div>


        <div class="text-center mt-7 fadein-ele">


            <div class="mb-5">
                <?php
    if($lang_code=='en')
    {
?>
                <a href="<?php echo get_site_url().'/'.$lang_code.'/contact-us';?>" class="consult-btn-a fadein-ele">
                    <img class="consult-btn" src="https://unionus.com.hk/wp-content/uploads/2022/08/consult-btn-en.png"
                        alt=""></a>
                <?php
    }
    else{
 ?>
                <a href="<?php echo get_site_url().'/'.$lang_code.'/contact-us';?>" class="consult-btn-a fadein-ele">
                    <img class="consult-btn" src="https://unionus.com.hk/wp-content/uploads/2022/08/consult-btn.png"
                        alt=""></a>
                <?php       
    }
    ?>

            </div>
            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">
                <?php echo get_field('content_part_3');?>

                <!-- 進一步確認申請資格 -->
            </h2>
        </div>



        <div class="mt-6 text-center ">
            <div><img class="flo-icon fadeindown-ele"
                    src="<?php echo get_template_directory_uri();?>/assets/images/flo-icon.png" alt=""></div>

            <div class="fadein-ele">
                <?php echo get_field('content_part_4');?>
            </div>

            <!-- <h2 class="gold text-center">

                申請程序 <br>
                預計時間(由提出申請日起計)
            </h2> -->

            <div class="fadeinup-ele">
                <?php echo get_field('content_part_5');?>
            </div>
            <!-- <h2 class="mt-5"><span class="gold">第</span>1<span class="gold">階段</span></h2>

            <div class="mt-5">債務人帶備有關債項及入息等資料進行IVA債務重組諮詢及分析，得到我們接納辦理後， 由代名人爾聯會計師擬定還款建議書
                (不成功,不收費)我們亦會以豐富經驗平衡債權人及債務人利益，編寫債務重組建議書，當中除了建議債務的每月還款額、期數、利率外，亦列明了申請人的生活所需開支；申請人的資產如自住物業、私家車、保險、退休金等亦會清楚交代。
            </div>

            <div class="iva-step-line"></div>

            <div>
                <h2><span class="gold">第</span>1<span class="gold">日</span></h2>
                <div>進行宣誓，由代表律師將臨時命令申請書呈送法庭存檔</div>

            </div>
            <div class="iva-step-line"></div>

            <div>
                <div class="big-size"><span class="gold">約</span>1<span class="gold">星期內</span>
                </div>
            </div>
            <div class="iva-step-line"></div>


            <h2><span class="gold">第</span>2<span class="gold">階段</span></h2>
            <div>法庭聆訊(由代表律師出庭，申請人無需上庭)，頒佈IVA臨時命令
            </div>

            <div class="iva-step-line"></div>


            <div>
                <h2>
                    <span class="gold">約</span>2<span class="gold">個月</span>

                </h2>

                <div>刊登債權人會議通告(中英文報紙各一份)</div>
            </div>
            <div class="iva-step-line"></div>


            <div>
                <h2>
                    <span class="gold">約</span>2<span class="gold">個半月</span>

                </h2>

                <div>舉行債權人會議</div>
            </div>

            <div class="iva-step-line"></div>



            <div>
                <div class="big-size"><span class="gold">約</span>3<span class="gold">個月</span>
                </div>
            </div>


            <div class="iva-step-line"></div>


            <h2><span class="gold">第</span>3<span class="gold">階段</span></h2> -->

            <div class="inner-container2 mx-auto">
                <div class="fadein-ele">
                    <?php echo get_field('content_part_6');?>

                    <!-- 獲出席和投票的債權人或其代表以大多數通過決議（即佔出席及投票債權人所持債款總值75%以上），債務重組實行，每月依時繳交還款，再由代名人安排還款予債權人。 -->
                </div>

                <div class="mt-5 text-start fadeleft-ele">
                    <?php echo get_field('content_part_7');?>

                    <!-- <h2 class="gold">
                        即時減輕債務壓力</h2>
                    <div>
                        進行IVA債務重組/個人自願安排後，不但減輕經濟及心理負擔，更可避免破壞信貸聲譽及影響工作。您只須交齊文件，最快1天內可安排到律師樓宣誓，我們並在翌日通知債權人(如銀行和財務公司等等)。大部分債權人會立即停止追數，每月還款會立即得到舒緩。
                    </div> -->
                </div>

                <div class="mt-5 text-end  faderight-ele">
                    <?php echo get_field('content_part_8');?>

                    <!-- <h2 class="gold">
                        法庭頒令清還，節省利息支出
                    </h2>
                    <div>IVA是透過認可法律代表及認可會計師，憑藉爾聯豐富債務處理經驗，因應債務人的個人收入及財務狀況，
                        向法庭及債權人提出新還款方案，由法庭作出頒令，並召開債權人會議就該方案進行協商。達成新還款協議後，
                        讓債務人依新方案將債項完全清還，一般還款利息可較原先降低達70%，避免破產，重新開展新生活。 </div> -->
                </div>

                <div class="mt-5 text-start  fadeleft-ele">
                    <?php echo get_field('content_part_9');?>

                    <!-- <h2 class="gold">
                        無須破產，保障你的生活質數</h2>
                    <div>
                        進行IVA債務重組/由於破產會破壞債務人的信貸能力及聲譽，更有可能令債務人失去工作，
                        尤其是牽涉處理資金財產、須專業資格、須獲授權或公務等的職業，所以對這些類別工作的人士來說，IVA是破產以外的最佳方法。 (如銀行和財務公司等等)。大部分債權人會立即停止追數，每月還款會立即得到舒緩。
                    </div> -->
                </div>


                <div class="row gx-5 justify-content-center mt-6 fadein-ele">

                    <div class="col-12 position-relative gold-table-div-wrapper-col">
                        <div class="gold-table-div-wrapper">

                            <img class="table-head-th-img"
                                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/table-head-th.png"
                                alt="">


                            <div class="gold-table-div gold" style="">

                                <?php echo get_field('content_part_10');?>


                                <!-- <table class="gold-table">


                                    <tbody>

                                        <tr>
                                            <td class="p-5">
                                                <h2 class="gold text-center">債務重組好處</h2>

                                                <div class="mt-5   text-center">

                                                    <ul>


                                                        <li>避免破產</li>

                                                        <li>沒有如破產條例般的限制和不會有破產身份或記錄</li>

                                                        <li>大幅減少支付給銀行之利息</li>

                                                        <li>毋須通知僱主及家人</li>

                                                        <li>過程所需的時間較破產程序短</li>

                                                        <li>定息定額還款</li>

                                                        <li>即時停止催收</li>


                                                    </ul>





                                                </div>
                                            </td>
                                        </tr>




                                    </tbody>

                                </table> -->
                            </div>

                            <img class="table-foot-th-img"
                                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/table-foot.png"
                                alt="">



                        </div>
                    </div>

                </div>


            </div>


        </div>








        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5 fadeinup-ele">
                <?php echo get_field('content_part_11');?>

                <!-- IVA的常見問題 -->
            </h2>
        </div>


        <div class="inner-container mx-auto">

            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_12');?>

                <!-- <div class="gold big-size">1.申請IVA的過程需時多久？</div>
                一般來說，由簽署文件，宣誓，排期上庭直到開債權人會議，約需三個月時間，全程會由具我們會計師與律師跟進，保障閣下的私隱。 -->
            </div>
            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_13');?>

                <!-- <div class="gold big-size">2.辦理IVA會否通知其僱主或家人？</div>
                絕大部份職業是毋須通知僱主，除了一些受金融管理局監管的機構僱員或紀律部隊，例如銀行/警察。申請債務重組是不會通知家人的。 -->
            </div>


            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_14');?>

                <!-- <div class="gold big-size">3.有物業可否辦理IVA？</div>
                一般銀行只要求欠債人變賣正資產物業，以減輕欠債額。現時大部份負資產人士及需補地價之業主，其物業都不會受影響。 -->
            </div>



            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_15');?>

                <!-- <div class="gold big-size">4.自僱人士能否辦理IVA？</div>
                受僱人士當然可以辦理債務重組申請，即使是自僱人士，只要能夠提供合理的入息證明，也符合辦理債務重組的基本要求。 -->

            </div>

            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_16');?>

                <!-- <div class="gold big-size">5.申請IVA期間債務人需要繼續償還債權人之欠款嗎？</div>
                大部份債權人收到債務重組申請通知書，都會同理債務人的處境而願意暫停追討款項，直到完成債權人會議，商議了一個新的還款方案後, 才重新開始償還欠款。 -->

            </div>

            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_17');?>

                <!-- <div class="gold big-size">6.根據法例規定，怎樣為之正式通過IVA申請？</div>
                根據條例，債務人所提出的債務重組建議，只要有欠債額總值的75%或以上債權人同意便可正式獲得通過。 -->
            </div>



            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_18');?>

                <!-- <div class="gold big-size">7.IVA供款期間可否借貸？</div>
                欠債人於IVA供款期間應不應再作借貸， 而一般銀行或財務機構均不會接納其貸款申請 -->
            </div>





            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_19');?>

                <!-- <div class="gold big-size">8.IVA 的費用是怎計算的?可分期支付嗎?</div>
                我們的收費模式簡單、透明和合理，可參考"IVA 債務重組收費"。另我們的收費全是分期收取的。 -->
            </div>




            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_20');?>

                <!-- <div class="gold big-size">9.諮詢IVA過程是否需要收費？</div>
                我們保證不成功不收費。直至閣下決定委託我們作為你的申請代表，決定由我們會計師代為草擬還款方案，才會簽定收費協議。 -->
            </div>




            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_21');?>

                <!-- <div class="gold big-size">10.IVA供款期間如遇失業或減薪應怎樣處理？</div>
                在供款期間遇到失業或減薪等問題請和我們聯絡，因為IVA供款是透過雙方共同協議的。不過債務人要暫緩供款或減少供款，是必須出示有力之文件及經過債權人之同意方可。 -->
            </div>





            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_22');?>

                <!-- <div class="gold big-size">11.我們都可於高等法院的網頁上查閱有關紀錄？</div>
                是的。 -->
            </div>





            <div class="mt-5 fadeleft-ele">
                <?php echo get_field('content_part_23');?>

                <!-- <div class="gold big-size">12.IVA，DRP及IDRP有何分別？</div>

                <span class="gold">IVA 債務重組</span> - 統一債項，需經法庭處理的重組方案，一般適合債項數目較多、欠債比例較高的債務人。  <br>
                <span class="gold">DRP 債務舒緩計劃</span> - 與個別債權人磋商新的還款方案，不需經法庭處理, 費用較平但不是每個債權人均接受債務舒緩申請。 <br>
                <span class="gold">IDRP 綜合債務舒緩計劃</span> -
                是透過與欠債人的最大債權人商談新還款方法的重組債務方案。在整個過程中，只要這最大債權人願意接受欠債人的還款方案，而其他債權人也沒有異議, 最大債權人便會統一欠債人之所有欠款。 -->

            </div>













        </div>


        <div class="text-center mt-7">


            <div class="mb-5">
                <?php
    if($lang_code=='en')
    {
?>
                <a href="<?php echo get_site_url().'/'.$lang_code.'/contact-us';?>" class="consult-btn-a fadein-ele">
                    <img class="consult-btn" src="https://unionus.com.hk/wp-content/uploads/2022/08/consult-btn-en.png"
                        alt=""></a>
                <?php
    }
    else{
 ?>
                <a href="<?php echo get_site_url().'/'.$lang_code.'/contact-us';?>" class="consult-btn-a fadein-ele">
                    <img class="consult-btn" src="https://unionus.com.hk/wp-content/uploads/2022/08/consult-btn.png"
                        alt=""></a>
                <?php       
    }
    ?>

            </div>

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5 fadeinup-ele">
                <?php echo get_field('content_part_24');?>

                <!-- IVA 個人自願安排/債務重組 <br>
                成功案例 -->
            </h2>
        </div>


        <div class="mt-5 drp-case-div">
            <ul>



                <li class="fadein-ele wow  animated" style="opacity: 1; visibility: visible;">

                    <?php echo get_field('content_part_25');?>

                    <!-- <div class="name">
                        <h3 class="gold"> 職業：Office　月入：$17,915 </h3>
                    </div>
                    <div class="nr">
                        <div class="gold-table-div">

                            <table cellspacing="0px">
                                <tbody>
                                    <tr>
                                        <th>債務機構</th>
                                        <th>貸款額</th>
                                        <th>現時欠款</th>
                                        <th>每月最低還款</th>
                                        <th>每月利率</th>
                                        <th>每月利息開支</th>
                                        <th>舒緩後供款</th>
                                        <th>期數</th>
                                        <th>舒緩後每月利率</th>
                                        <th>舒緩後每月利息</th>
                                    </tr>

                                    <tr>
                                        <td>CITI</td>
                                        <td>$29,000</td>
                                        <td>$30,362</td>
                                        <td>$1,214 </td>
                                        <td>3.00%</td>
                                        <td>$911 </td>
                                        <td>$802</td>
                                        <td>49</td>
                                        <td>0.60%</td>
                                        <td>$182 </td>
                                    </tr>

                                    <tr>
                                        <td>HSBC</td>
                                        <td>$50,000</td>
                                        <td>$50,496</td>
                                        <td>$2,020 </td>
                                        <td>3.00%</td>
                                        <td>$1,515 </td>
                                        <td>$1,031</td>
                                        <td>49</td>
                                        <td>0.00%</td>
                                        <td>$0 </td>
                                    </tr>

                                    <tr>
                                        <td>JCB</td>
                                        <td>$10,000</td>
                                        <td>$11,749</td>
                                        <td>$470 </td>
                                        <td>3.00%</td>
                                        <td>$352 </td>
                                        <td>$310</td>
                                        <td>49</td>
                                        <td>0.60%</td>
                                        <td>$70 </td>
                                    </tr>

                                    <tr>
                                        <td>AE</td>
                                        <td>$47,000</td>
                                        <td>$47,919</td>
                                        <td>$1,917 </td>
                                        <td>3.00%</td>
                                        <td>$1,438 </td>
                                        <td>$1,361</td>
                                        <td>49</td>
                                        <td>0.80%</td>
                                        <td>$383 </td>
                                    </tr>

                                    <tr>
                                        <td>DBS</td>
                                        <td>$56,000</td>
                                        <td>$57,838</td>
                                        <td>$2,314 </td>
                                        <td>3.00%</td>
                                        <td>$1,735 </td>
                                        <td>$1,527</td>
                                        <td>49</td>
                                        <td>0.60%</td>
                                        <td>$347 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="jiage">
                        <div class="d-inline-block">
                            <div class="little-flo-top"></div>


                            <div>
                                <span class="gold"> 每月總節省利息：</span>$5,951-$982 <span class="gold">=</span> $4,969

                            </div>

                            <div>
                                <span class="gold">每月還款金額：</span>$7,935 <span class="gold">減至</span> $5,031

                            </div>
                            <div class="little-flo-bottom"></div>

                        </div>
                    </div> -->
                </li>

                <li class="fadein-ele wow animated" style="opacity: 1; visibility: visible;">
                    <?php echo get_field('content_part_26');?>

                    <!-- <div class="name">
                        <h3 class="gold">職業：Salon　月入：$10,000</h3>
                    </div>
                    <div class="nr">
                        <div class="gold-table-div">

                            <table cellspacing="0px">
                                <tbody>
                                    <tr>
                                        <th>債務機構</th>
                                        <th>貸款額</th>
                                        <th>現時欠款</th>
                                        <th>每月最低還款</th>
                                        <th>每月利率</th>
                                        <th>每月利息開支</th>
                                        <th>舒緩後供款</th>
                                        <th>期數</th>
                                        <th>舒緩後每月利率</th>
                                        <th>舒緩後每月利息</th>
                                    </tr>

                                    <tr>
                                        <td>AE</td>
                                        <td>$33,000</td>
                                        <td>$33,710</td>
                                        <td>$1,348 </td>
                                        <td>3.00%</td>
                                        <td>$1,011 </td>
                                        <td>$1,112</td>
                                        <td>40</td>
                                        <td>0.80%</td>
                                        <td>$270 </td>
                                    </tr>

                                    <tr>
                                        <td>SCB</td>
                                        <td>$1,700,000</td>
                                        <td>$157,011</td>
                                        <td>$6,280 </td>
                                        <td>3.00%</td>
                                        <td>$4,710 </td>
                                        <td>$3,925</td>
                                        <td>40</td>
                                        <td>0.00%</td>
                                        <td>$4,710 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="jiage">
                        <div class="d-inline-block">
                            <div class="little-flo-top"></div>

                            <div>
                                <span class="gold">每月總節省利息：</span>$5,721-$4,980 <span class="gold">=</span> $741
                            </div>
                            <div>
                                <span class="gold">每月還款金額：</span>$7,628 <span class="gold">減至</span> $5,037
                            </div>
                            <div class="little-flo-bottom"></div>
                        </div>

                    </div> -->
                </li>
                <li class="fadein-ele wow animated" style="opacity: 1; visibility: visible;">

                    <?php echo get_field('content_part_27');?>

                    <!-- <div class="name">
                        <h3 class="gold">職業：CS　月入：$16,600</h3>
                    </div>
                    <div class="nr">
                        <div class="gold-table-div">

                            <table cellspacing="0px">
                                <tbody>
                                    <tr>
                                        <th>債務機構</th>
                                        <th>貸款額</th>
                                        <th>現時欠款</th>
                                        <th>每月最低還款</th>
                                        <th>每月利率</th>
                                        <th>每月利息開支</th>
                                        <th>舒緩後供款</th>
                                        <th>期數</th>
                                        <th>舒緩後每月利率</th>
                                        <th>舒緩後每月利息</th>
                                    </tr>

                                    <tr>
                                        <td>HS Bank</td>
                                        <td>$52,000</td>
                                        <td>$52,445.4</td>
                                        <td>$1,700 </td>
                                        <td>4.00%</td>
                                        <td>$2,098 </td>
                                        <td>$1,093</td>
                                        <td>48</td>
                                        <td>0.00%</td>
                                        <td>$0 </td>
                                    </tr>

                                    <tr>
                                        <td>PROMISE</td>
                                        <td>$50,000</td>
                                        <td>$50,900</td>
                                        <td>$6,000 </td>
                                        <td>4.00%</td>
                                        <td>$2,036 </td>
                                        <td>$1,264</td>
                                        <td>48</td>
                                        <td>0.40%</td>
                                        <td>$204 </td>
                                    </tr>

                                    <tr>
                                        <td>EAST ASIA</td>
                                        <td>$139,384</td>
                                        <td>$125,020</td>
                                        <td>$4,465</td>
                                        <td>1.12%</td>
                                        <td>$1,561 </td>
                                        <td>$3,229.68</td>
                                        <td>48</td>
                                        <td>0.50%</td>
                                        <td>$625 </td>
                                    </tr>

                                    <tr>
                                        <td>PUBILC</td>
                                        <td>$28,000</td>
                                        <td>$32,700</td>
                                        <td>$1,635</td>
                                        <td>1.67%</td>
                                        <td>$468 </td>
                                        <td>$877.45</td>
                                        <td>48</td>
                                        <td>0.60%</td>
                                        <td>$196 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="jiage">

                        <div class="d-inline-block">
                            <div class="little-flo-top"></div>


                            <div>
                                <span class="gold">每月總節省利息：</span>$6,163-$1,025 <span class="gold">=</span> $5,138
                            </div>
                            <div>
                                <span class="gold">每月還款金額：</span>$13,800 <span class="gold">減至</span> $6,464.13
                            </div>
                            <div class="little-flo-bottom"></div>
                        </div>

                    </div> -->
                </li>
                <li class="fadein-ele wow animated" style="opacity: 1; visibility: visible;">
                    <?php echo get_field('content_part_28');?>

                    <!-- <div class="name">
                        <h3 class="gold"> 職業：Designer　月入：$22,800</h3>
                    </div>
                    <div class="nr">
                        <div class="gold-table-div">

                            <table cellspacing="0px">
                                <tbody>
                                    <tr>
                                        <th>債務機構</th>
                                        <th>貸款額</th>
                                        <th>現時欠款</th>
                                        <th>每月最低還款</th>
                                        <th>每月利率</th>
                                        <th>每月利息開支</th>
                                        <th>舒緩後供款</th>
                                        <th>期數</th>
                                        <th>舒緩後每月利率</th>
                                        <th>舒緩後每月利息</th>
                                    </tr>

                                    <tr>
                                        <td>Aeon</td>
                                        <td>$30,000</td>
                                        <td>$30,000</td>
                                        <td>$1,200 </td>
                                        <td>3.00%</td>
                                        <td>$900 </td>
                                        <td>$748</td>
                                        <td>67</td>
                                        <td>1.00%</td>
                                        <td>$300 </td>
                                    </tr>

                                    <tr>
                                        <td>UA</td>
                                        <td>$5,000</td>
                                        <td>$5,000</td>
                                        <td>$200 </td>
                                        <td>3.00%</td>
                                        <td>$150 </td>
                                        <td>$125</td>
                                        <td>67</td>
                                        <td>1.00%</td>
                                        <td>$50 </td>
                                    </tr>

                                    <tr>
                                        <td>SC</td>
                                        <td>$20,000</td>
                                        <td>$20,000</td>
                                        <td>$800 </td>
                                        <td>3.00%</td>
                                        <td>$600 </td>
                                        <td>$299</td>
                                        <td>67</td>
                                        <td>0.00%</td>
                                        <td>$0 </td>
                                    </tr>

                                    <tr>
                                        <td>BOC</td>
                                        <td>$100,000</td>
                                        <td>$100,000</td>
                                        <td>$4,000 </td>
                                        <td>3.00%</td>
                                        <td>$3,000 </td>
                                        <td>$1,863</td>
                                        <td>67</td>
                                        <td>0.37%</td>
                                        <td>$370 </td>
                                    </tr>

                                    <tr>
                                        <td>HS Bank</td>
                                        <td>$70,000</td>
                                        <td>$70,000</td>
                                        <td>$2,800 </td>
                                        <td>3.00%</td>
                                        <td>$2,100 </td>
                                        <td>$1,045</td>
                                        <td>67</td>
                                        <td>0.00%</td>
                                        <td>$0 </td>
                                    </tr>

                                    <tr>
                                        <td>UA</td>
                                        <td>$30,000</td>
                                        <td>$52,316</td>
                                        <td>$2,378</td>
                                        <td>3.76%</td>
                                        <td>$1,128 </td>
                                        <td>$1,303.99</td>
                                        <td>67</td>
                                        <td>1.00%</td>
                                        <td>$523 </td>
                                    </tr>

                                    <tr>
                                        <td>PROMISE</td>
                                        <td>$40,000</td>
                                        <td>$54,600</td>
                                        <td>$2,600</td>
                                        <td>2.33%</td>
                                        <td>$933 </td>
                                        <td>$1,142.52</td>
                                        <td>67</td>
                                        <td>0.60%</td>
                                        <td>$606 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="jiage">
                        <div class="d-inline-block">
                            <div class="little-flo-top"></div>

                            <div>
                                <span class="gold">每月總節省利息：</span>$8,811-$1,849 <span class="gold">=</span> $6,962
                            </div>
                            <div>
                                <span class="gold">每月還款金額：</span>$13,978 <span class="gold">減至</span> $6,526.51
                            </div>
                            <div class="little-flo-bottom"></div>
                        </div>
                    </div> -->
                </li>
                <li class="fadein-ele wow animated" style="opacity: 1; visibility: visible;">
                    <?php echo get_field('content_part_29');?>

                    <!-- <div class="name">
                        <h3 class="gold">職業：Accounting　月入：$42,000</h3>
                    </div>
                    <div class="nr">
                        <div class="gold-table-div">

                            <table cellspacing="0px">
                                <tbody>
                                    <tr>
                                        <th>債務機構</th>
                                        <th>貸款額</th>
                                        <th>現時欠款</th>
                                        <th>每月最低還款</th>
                                        <th>每月利率</th>
                                        <th>每月利息開支</th>
                                        <th>舒緩後供款</th>
                                        <th>期數</th>
                                        <th>舒緩後每月利率</th>
                                        <th>舒緩後每月利息</th>
                                    </tr>

                                    <tr>
                                        <td>SC</td>
                                        <td>$189,000</td>
                                        <td>$161,677</td>
                                        <td>$6,467 </td>
                                        <td>3.00%</td>
                                        <td>$4,850 </td>
                                        <td>$3,368</td>
                                        <td>48</td>
                                        <td>0.00%</td>
                                        <td>$0 </td>
                                    </tr>

                                    <tr>
                                        <td>DBS</td>
                                        <td>$37,000</td>
                                        <td>$32,112</td>
                                        <td>$1,284 </td>
                                        <td>3.00%</td>
                                        <td>$963 </td>
                                        <td>$963 </td>
                                        <td>48</td>
                                        <td>0.50%</td>
                                        <td>$161 </td>
                                    </tr>

                                    <tr>
                                        <td>DBS</td>
                                        <td>$150,000</td>
                                        <td>$67,496</td>
                                        <td>$5,192</td>
                                        <td>0.68%</td>
                                        <td>$1,025 </td>
                                        <td>$1,743.64</td>
                                        <td>48</td>
                                        <td>0.50%</td>
                                        <td>$337 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="jiage">

                        <div class="d-inline-block">


                            <div class="little-flo-top"></div>


                            <div>
                                <span class="gold">每月總節省利息：</span>$6,838-$498 <span class="gold">=</span>$6,340
                            </div>
                            <div>
                                <span class="gold">每月還款金額：</span>$12,943 <span class="gold">減至</span> $6,074.64
                            </div>
                            <div class="little-flo-bottom"></div>
                        </div>


                    </div> -->
                </li>

            </ul>
        </div>


















    </div>
</section>


<!-- </div> -->


<style type="text/css">
/* .bg-shape-1 {
    display: none;

}

.bg-shape-2 {
    display: none;

} */
</style>


<script type="text/javascript">
const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {


    // $('.gold-table-div').height($('.gold-table-div-wrapper-col').height() - 100);

    // .gold-table-div.silver
    // $('.gold-table-div.silver').height($('.gold-table-div-wrapper-col').height() - 100);
    // $('.home-banner-div').width($(window).width());
    // $('.home-banner-div').height($(window).height());


    // $('.company-intro-content-1').css({
    //     'top': $('.company-intro-row-div').height() / 2 - $('.company-intro-content-1').height() - 30 +
    //         'px'
    // })

    // $('.company-intro-content-2').css({
    //     'bottom': $('.company-intro-row-div').height() / 2 - $('.company-intro-content-2').height() -
    //         30 +
    //         'px'
    // })




});
</script>

<div>
    <?php
    if($lang_code=='en')
    {
?>
    <a href="<?php echo get_site_url().'/'.$lang_code.'/contact-us';?>" class="consult-btn-a fadein-ele"> <img
            class="consult-btn" src="https://unionus.com.hk/wp-content/uploads/2022/08/consult-btn-en.png" alt=""></a>
    <?php
    }
    else{
 ?>
    <a href="<?php echo get_site_url().'/'.$lang_code.'/contact-us';?>" class="consult-btn-a fadein-ele"> <img
            class="consult-btn" src="https://unionus.com.hk/wp-content/uploads/2022/08/consult-btn.png" alt=""></a>
    <?php       
    }
    ?>

</div>

<?php

get_footer();