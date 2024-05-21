<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->date('day')->unique();

            //twt && fol platforms

            //الحساب العام
            $table->integer('general_twt_pst')->nullable();
            $table->integer('general_twt_fol')->nullable();
            $table->integer('general_twt_ads')->nullable();
            $table->integer('general_ig_pst')->nullable();
            $table->integer('general_ig_fol')->nullable();
            $table->integer('general_ig_ads')->nullable();
            // حساب طلقة
            $table->integer('talaat_barq_twt_pst')->nullable();
            $table->integer('talaat_barq_twt_fol')->nullable();
            $table->integer('talaat_barq_ig_pst')->nullable();
            $table->integer('talaat_barq_ig_fol')->nullable();
            // حساب الطرق
            $table->integer('barq_traffic_twt_pst')->nullable();
            $table->integer('barq_traffic_twt_fol')->nullable();
            $table->integer('barq_traffic_ig_pst')->nullable();
            $table->integer('barq_traffic_ig_fol')->nullable();
            // برق الخير            
            $table->integer('barq_khair_twt_pst')->nullable();
            $table->integer('barq_khair_twt_fol')->nullable();
            $table->integer('barq_khair_ig_pst')->nullable();
            $table->integer('barq_khair_ig_fol')->nullable();
            // برق ابو ظبي
            $table->integer('ad_barq_twt_pst')->nullable();
            $table->integer('ad_barq_twt_fol')->nullable();
            $table->integer('ad_barq_ig_pst')->nullable();
            $table->integer('ad_barq_ig_fol')->nullable();
            // برق دبي
            $table->integer('dxb_barq_twt_pst')->nullable();
            $table->integer('dxb_barq_twt_fol')->nullable();
            $table->integer('dxb_barq_ig_pst')->nullable();
            $table->integer('dxb_barq_ig_fol')->nullable();
            // برق الشارقه
            $table->integer('shj_barq_twt_pst')->nullable();
            $table->integer('shj_barq_twt_fol')->nullable();
            $table->integer('shj_barq_ig_pst')->nullable();
            $table->integer('shj_barq_ig_fol')->nullable();
            // برق عجمان
            $table->integer('ajm_barq_twt_pst')->nullable();
            $table->integer('ajm_barq_twt_fol')->nullable();
            $table->integer('ajm_barq_ig_pst')->nullable();
            $table->integer('ajm_barq_ig_fol')->nullable();
            // برق ام القيوين
            $table->integer('barquaq_twt_pst')->nullable();
            $table->integer('barquaq_twt_fol')->nullable();
            $table->integer('barquaq_ig_pst')->nullable();
            $table->integer('barquaq_ig_fol')->nullable();
            // برق راس الخيمة
            $table->integer('barqrak_twt_pst')->nullable();
            $table->integer('barqrak_twt_fol')->nullable();
            $table->integer('barqrak_ig_pst')->nullable();
            $table->integer('barqrak_ig_fol')->nullable();
            // برق الفجير
            $table->integer('barqfuj_twt_pst')->nullable();
            $table->integer('barqfuj_twt_fol')->nullable();
            $table->integer('barqfuj_ig_pst')->nullable();
            $table->integer('barqfuj_ig_fol')->nullable();
            // برق الصحة
            $table->integer('barqhealth_twt_pst')->nullable();
            $table->integer('barqhealth_twt_fol')->nullable();
            $table->integer('barqhealth_ig_pst')->nullable();
            $table->integer('barqhealth_ig_fol')->nullable();
            // برق الانجليزي
            $table->integer('uae_barq_en_twt_pst')->nullable();
            $table->integer('uae_barq_en_twt_fol')->nullable();
            $table->integer('uae_barq_en_ig_pst')->nullable();
            $table->integer('uae_barq_en_ig_fol')->nullable();
            // برق عاجل
            $table->integer('ajil_twt_pst')->nullable();
            $table->integer('ajil_twt_fol')->nullable();
            $table->integer('ajil_ig_pst')->nullable();
            $table->integer('ajil_ig_fol')->nullable();
            
            
            
           

            // threads
            $table->integer('uea_barq_threads_ig_pst')->nullable();
            $table->integer('uea_barq_threads_ig_fol')->nullable();
            
            
            // انستا ستوري
            $table->integer('story_ar_ig_pst')->nullable();
            $table->integer('story_ar_ig_viw')->nullable();
            $table->string('story_ar_ig_tm')->nullable();

            $table->integer('story_en_ig_pst')->nullable();
            $table->integer('story_en_ig_viw')->nullable();
            $table->string('story_en_ig_tm')->nullable();
        
            // شبكة ابوظبي
            $table->integer('net_ad_fol')->nullable();
            $table->integer('net_ad_fol_total')->nullable();
            $table->integer('net_ad_fol_daily')->nullable();

            $table->integer('net_ad_threads_fol')->nullable();
            $table->integer('net_ad_threads_fol_total')->nullable();
            $table->integer('net_ad_threads_fol_daily')->nullable();
            
            
            // حساب العميد الامارات
            $table->integer('ameed_news_fol')->nullable();
            $table->integer('ameed_news_fol_total')->nullable();
            $table->integer('ameed_news_fol_daily')->nullable();

            $table->integer('ameed_news_threads_fol')->nullable();
            $table->integer('ameed_news_threads_fol_total')->nullable();
            $table->integer('ameed_news_threads_fol_daily')->nullable();

            //another platforms
            // سناب
            $table->integer('snap_pst')->nullable();
            $table->integer('snap_viw')->nullable();
            $table->integer('snap_fol')->nullable();
            $table->string('snap_tm')->nullable();
            // برق كاست
            $table->integer('barq_cast_pst')->nullable();
            $table->integer('barq_cast_viw')->nullable();
            $table->string('barq_cast_tm')->nullable();
            // تليجرام 
            $table->integer('telegram_pst')->nullable();
            $table->integer('telegram_fol')->nullable();
            //    نبض
            $table->integer('nbd_pst')->nullable();
            $table->integer('nbd_fol')->nullable();
            // تيك توك
            $table->integer('tt_pst')->nullable();
            $table->integer('tt_fol')->nullable();
            // يوتيوب
            $table->integer('yt_pst')->nullable();
            $table->integer('yt_fol')->nullable();
            
            //sms
            $table->integer('uae_barq_sms')->nullable();
            $table->integer('from_uae_sms')->nullable();
            $table->integer('sharjah_barq_sms')->nullable();
            $table->integer('barq_sport_sms')->nullable();
            $table->integer('ad_barq_sms')->nullable();
            $table->integer('dubai_barq_sms')->nullable();
            $table->integer('uae_barq_English_sms')->nullable();
            $table->integer('from_uae_english_sms')->nullable();
            
            //top_rate
            $table->text('top_twt')->nullable();
            $table->text('top_twt_cmt')->nullable();
            $table->text('top_ig_cmt')->nullable();
            $table->text('top_tt')->nullable();
            $table->text('top_yt')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socials');
    }
}
