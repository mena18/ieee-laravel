<?php

use Illuminate\Database\Seeder;
use App\Certificates;
class CertificatesDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    $certificates = [
            ["1","Abdelrahman Mohamed","30","D818-340","1","https://drive.google.com/file/d/1PQcE1qfapDo0yJ7kVVpyAn5PI8KND2Ll/view?usp=sharing"],
            ["2","Ahmed Abbas","30","D180-044","1","https://drive.google.com/file/d/1QMUDmqw125zkfN1UCY4iuaJ8TdMoZMpW/view?usp=sharing"],
            ["3","Ahmed Amir Elmasry","30","D600-211","1","https://drive.google.com/file/d/1Fp0HICQXN0w-esCib7T7hzwNANBmFYlH/view?usp=sharing"],
            ["4","Aya Mahmoud","30","D174-807","1","https://drive.google.com/file/d/1Qdozc_olkiCazyDBUCWRZmGdl5S8kq3s/view?usp=sharing"],
            ["5","Aya Waleed","30","D060-568","1","https://drive.google.com/file/d/1keWbWruYOXvq8bqbAMw3v6sVAcLcA11y/view?usp=sharing"],
            ["6","Donia Hany","30","D744-105","1","https://drive.google.com/file/d/1rghStJL95D25jywRMkvK3iPetJGt_2HQ/view?usp=sharing"],
            ["7","Geourge Maged","30","D525-018","1","https://drive.google.com/file/d/1wxGz-JefjdAWBxk1aVb7zRfmjIVdwiic/view?usp=sharing"],
            ["8","Haidy Hegazy","30","D094-459","1","https://drive.google.com/file/d/1JSEguVa0Xy9A1QLvpLc6gvJz_q_JTqT3/view?usp=sharing"],
            ["9","Ingy Ibrahim","30","D224-631","1","https://drive.google.com/file/d/1Im6MTBz831rt2rjl21DYFmBn7TZks-iZ/view?usp=sharing"],
            ["10","Kareema Aly","30","D253-906","1","https://drive.google.com/file/d/1VBTTtirMiMCij9rzqAwuHaiNI4ksUnMs/view?usp=sharing"],
            ["11","Mazen Mandour","30","D493-167","1","https://drive.google.com/file/d/1jHmwNlisEYOPtnNOqUWCKeVHOdxdBTGj/view?usp=sharing"],
            ["12","Mohamed Kilany","30","D448-315","1","https://drive.google.com/file/d/1-MuN37zzvk4JqsFDRZDJ9J7W88adQakM/view?usp=sharing"],
            ["13","Mohamed Mamdouh","30","D047-756","1","https://drive.google.com/file/d/1jrEqijNRARjG1rv3bRko2Y22ueiUG2hq/view?usp=sharing"],
            ["14","Mohamed Mokhtar","30","D466-807","1","https://drive.google.com/file/d/11PNODEdPo35MiL_fdqQJ1b5ElRaw-g8J/view?usp=sharing"],
            ["15","Mohmoud Emad","30","D125-985","1","https://drive.google.com/file/d/1qDY6cUYeAL_IF6IWYEX9xqN5rXS2ABoR/view?usp=sharing"],
            ["16","Nardeen Baher","30","D715-376","1","https://drive.google.com/file/d/1aEujfH8KlPkbg_SQpZgPOLVBsBFewikT/view?usp=sharing"],
            ["17","Omar Fathy","30","D333-729","1","https://drive.google.com/file/d/1_v0DMyvdDvysnHecwU-hOOPAPBzX9_6m/view?usp=sharing"],
            ["18","Passant Afify","30","D054-878","1","https://drive.google.com/file/d/1YDMuxWkcInVTdoOibyQecPZeCcU5WYDd/view?usp=sharing"],
            ["19","Sohaila Adham","30","D354-449","1","https://drive.google.com/file/d/199-3In2v7t-gdGfY5_YgdfG8ffSV-z9a/view?usp=sharing"],
            ["20","Abdelrahman Mohamed Hamza","21","M432-071","2","https://drive.google.com/file/d/1bJJJMqQ_-tjC2bElDhaAsKE_MyRtfhWm/view?usp=sharing"],
            ["21","Mohamed Abdelfatah","21","M783-155","2","https://drive.google.com/file/d/1zn-d2DcPntp0RgsoOARGfDVNDG6VCFaI/view?usp=sharing"],
            ["22","Mohsen Ghareeb","21","M213-071","2","https://drive.google.com/file/d/1r4FIuBodHi1-3NGpCPdxyaeNNM2wJ9oU/view?usp=sharing"],
            ["23","Younis Mahmoud Younis","21","M040-208","2","https://drive.google.com/file/d/1ce5hNiAMra0DKL2-YRt_6cDeRq4VLBNp/view?usp=sharing"],
            ["24","Ahmed Hossam Seif","21","M365-719","2","https://drive.google.com/file/d/12hBmsSYbLSb51O2_mojbn2MbHMipJabS/view?usp=sharing"],
            ["25","Awad Ibrahim","24","S727-005","2","https://drive.google.com/file/d/1vao7lcPJBxbg_pEeKlw7aFpqh3auRISK/view?usp=sharing"],
            ["26","Eslam Amgad","24","S119-418","3","https://drive.google.com/file/d/1JblogH-6zGltQfmi7KQ1LLqu8YX1eZXt/view?usp=sharing"],
            ["27","Fawzy Arafa","24","S306-555","3","https://drive.google.com/file/d/1oiXPiGFIdC6PPYXQkvR7MhE0xEgrLZYp/view?usp=sharing"],
            ["28","Hesien Mohamed","24","S152-688","3","https://drive.google.com/file/d/1c3UJQRQsJMLeJesrQQaN0Hlz-WmQ9D7h/view?usp=sharing"],
            ["29","Marawan Nasr","24","S839-918","3","https://drive.google.com/file/d/1U_cZB40kbwNY8TJ_aqAh1e32-6hJ9PP1/view?usp=sharing"],
            ["30","Mohamed Abdelhameed Ali","24","S546-987","3","https://drive.google.com/file/d/1K0pcEcjetL1SPNsz3cxWZwlH1dO3LQ1J/view?usp=sharing"],
            ["31","Mohamed Ashry","24","S145-422","3","https://drive.google.com/file/d/1s7OpBpD_Zzk9xV14JDb0WNNrwPSqj7-L/view?usp=sharing"],
            ["32","Nader","24","S473-375","3","https://drive.google.com/file/d/1StfIGRmrm57om_B9IhbD1T22jn1omnXv/view?usp=sharing"],
            ["33","Mostafa Tartosia","24","S031-960","3","https://drive.google.com/file/d/1HBeLZBmU5cX3Quggzrh8QZKPKvmIMhwR/view?usp=sharing"],
            ["34","Yasmin Amin","24","S464-093","3","https://drive.google.com/file/d/1vXzDUoy3rGYHcH0g3cfH3kI0YPZnGgQo/view?usp=sharing"],
            ["35","Yehia Ahmed Khames","24","S059-840","3","https://drive.google.com/file/d/1wzpuwY1CUmRKG9zGvE6fi_CAiH5pSTen/view?usp=sharing"],
            ["36","Younis Mohamed","24","S838-946","3","https://drive.google.com/file/d/1AjSCc724ds7FRXG4F79xtPjTGsfRtzqO/view?usp=sharing"],
            ["37","Abdelrahman Mohamed","24","R273-053","4","https://drive.google.com/file/d/1TsPsaAPhhnl5rbLxDxK2V_J6detNkwWn/view?usp=sharing"],
            ["38","Ahmed Amer Elmasry","24","R469-332","4","https://drive.google.com/file/d/1DdUEnuWLtWtn0N4cVRMHFCOX51bMaapU/view?usp=sharing"],
            ["39","Alaa Magdy","24","R705-729","4","https://drive.google.com/file/d/16GNDGjZS_mMlho2cTbMfiSAm_ljwP6xi/view?usp=sharing"],
            ["40","Aya Abdelhamed","24","R073-138","4","https://drive.google.com/file/d/1_tyIVfV7oOndqjcdUlrJjs9g1-NYUoOI/view?usp=sharing"],
            ["41","Aya Mahmoud","24","R429-536","4","https://drive.google.com/file/d/1xSIjESkafRtaZYXIBVwOVmckH9Gv_t1F/view?usp=sharing"],
            ["42","Aya Mohammed","24","R386-685","4","https://drive.google.com/file/d/1su8WhSjQzCO2xnDXF_-y2DT4ufBcsx1L/view?usp=sharing"],
            ["43","Aya Waleed","24","R913-322","4","https://drive.google.com/file/d/1WvYw47c9zt-Jq-8nNpZz9ElqnDd927S3/view?usp=sharing"],
            ["44","Bansaih Ashraf","24","R176-033","4","https://drive.google.com/file/d/18pm8xCki7GuIkX3-keMiFlNb0p-DGZFR/view?usp=sharing"],
            ["45","Donia Hany","24","R694-306","4","https://drive.google.com/file/d/1VwNV3KlOnd-f4iIVei5716dWdHvUmsCR/view?usp=sharing"],
            ["46","Esraa Abdelmonsef","24","R538-033","4","https://drive.google.com/file/d/1-NlbPMzFCSE7lDFv68ScJU61kholjc-a/view?usp=sharing"],
            ["47","Gorge Magdy","24","R243-488","4","https://drive.google.com/file/d/1y40BveGNkTMCm8_rNZ--5KwiXnVs9pOP/view?usp=sharing"],
            ["48","Ingy Ibrahim","24","R098-914","4","https://drive.google.com/file/d/1CLZHJ13rjKWYXAoA6q7GnFQN5Z4uOEgA/view?usp=sharing"],
            ["49","Karema Ali","24","R387-953","4","https://drive.google.com/file/d/1DO2Hv1_xHCV5KvKzWI4D509Kc08x4rsG/view?usp=sharing"],
            ["50","Mayar Mohmoud","24","R229-223","4","https://drive.google.com/file/d/1b8MmHVGpF0wJnmjQ0l6xCEP_fVT9oqg0/view?usp=sharing"],
            ["51","Mazen Mandour","24","R407-600","4","https://drive.google.com/file/d/1yNsglzuZyBJSinU7epLVa5K_vOTNrN37/view?usp=sharing"],
            ["52","Mohamed Kelany","24","R512-991","4","https://drive.google.com/file/d/17622kxj1YIw-kPqTz6HlL7p91ysoxtjJ/view?usp=sharing"],
            ["53","Mohamed Mamdouh","24","R690-182","4","https://drive.google.com/file/d/1wQis32D2tHSFp4-H8kIolys7ZExP_PqZ/view?usp=sharing"],
            ["54","Mohamed Mokhtar","24","R002-816","4","https://drive.google.com/file/d/1v1BD1oldt61czxaU3GA6WxNaIYI5Q95t/view?usp=sharing"],
            ["55","Nardeen Baher","24","R913-828","4","https://drive.google.com/file/d/1H8h3AlV0m0JcO1ysp-0zs3EgFcg6A5gd/view?usp=sharing"],
            ["56","Nour Samy","24","R728-236","4","https://drive.google.com/file/d/1H8h3AlV0m0JcO1ysp-0zs3EgFcg6A5gd/view?usp=sharing"],
            ["57","Omar Fathy","24","R886-241","4","https://drive.google.com/file/d/17psG_CPlBfMV1317K0bIpx6d7yTfnRE_/view?usp=sharing"],
            ["58","Passant Afify","24","R513-750","4","https://drive.google.com/file/d/1r7D5zNBN_YKnqehW1P3tum0YApcQB9rT/view?usp=sharing"],
            ["59","Rawan Tawfiq","24","R128-519","4","https://drive.google.com/file/d/1mIvBdy_nioJIMsu5yhbmE0a16QshTBoj/view?usp=sharing"],
            ["60","Roze Fathy","24","R570-252","4","https://drive.google.com/file/d/1fbvnP6ta7urUBV3jC0FdxPOAgkPpBZsA/view?usp=sharing"],
            ["61","Sherif Ashraf","24","R348-276","4","https://drive.google.com/file/d/1eknBu2191M0qz7UbeWYGJeJGnVd509dM/view?usp=sharing"],
            ["62","Sohaila Adham","24","R155-146","4","https://drive.google.com/file/d/1jUIvnVJurHM3TyIWrNrEs3xOpTS0X2uS/view?usp=sharing"],
            ["63","Salma Fawzy","24","R025-846","4","https://drive.google.com/file/d/1z5K87x_dksRcXZsgrw1jxspfxaoTMi5J/view?usp=sharing"],
            ["64","Zeyad Ibrahim","24","R836-737","4","https://drive.google.com/file/d/1Zioj-He3CnKJad7ijQKgAv5b9upiPzSf/view?usp=sharing"],
            ["65","Amr Ashraf Kamal","15","G180-178","7","https://drive.google.com/file/d/1k6CbpxQGn34tfMSkkS_Pty4YN9zLxBw2/view?usp=sharing"],
            ["66","Nour Elhoda Mohamed","15","G365-939","7","https://drive.google.com/file/d/186Cic9t6Ksk2izUg85UMqNI0QXTZrT_H/view?usp=sharing"],
            ["67","Afnan Mohamed Samy","12","P046-738","5","https://drive.google.com/file/d/1bYYNyLWtV04DHoAob0kQG_n_hcqO4jvw/view?usp=sharing"],
            ["68","Eslam Adel","12","P808-695","5","https://drive.google.com/file/d/1nvCHhYg0dWIt7dMZiAuFnxmZJykDpV_l/view?usp=sharing"],
            ["69","Fady Maged Elwazer Abdo","12","P984-888","5","https://drive.google.com/file/d/1ySNgCHN30Vuvi6vdaEs7XSsjLjnxVs1S/view?usp=sharing"],
            ["70","Fares Mostafa Mohamed","12","P527-411","5","https://drive.google.com/file/d/1497Us0GUZkymSuDyoAfPYcMiK9PQSsog/view?usp=sharing"],
            ["71","Hesham Ayman Nasr","12","P610-282","5","https://drive.google.com/file/d/1afTRJceZngz-X-y0L5k8ZNlifMREKlXv/view?usp=sharing"],
            ["72","Mechiel Medhat","12","P397-217","5","https://drive.google.com/file/d/1i1bf2kMbh4San7uS9caFPyaaY7-M1gBW/view?usp=sharing"],
            ["73","Mohamed Ahmed Hanafy","12","P168-588","5","https://drive.google.com/file/d/1qCzYXoOWn1IxPhMbTQsoZ7XkA3oIlr8s/view?usp=sharing"],
            ["74","Mohamed Khaled Basha","12","P875-492","5","https://drive.google.com/file/d/1yv3vG3-kfzxym4ecuvAeRqY_4nuci4g4/view?usp=sharing"],
            ["75","Omar Ahmed Ibrahim Elzainy","12","P785-214","5","https://drive.google.com/file/d/1WD8PiMrYyPVcGcfn-fI2Y2nr6v3OvuZM/view?usp=sharing"],
            ["76","Omar Ehab Mohamed","12","P111-111","5","https://drive.google.com/file/d/1Dhnas6aFhMk2-FLAZbb0qm0qRLfxyXrP/view?usp=sharing"],
            ["77","Radwa Saad Mohamed","12","P583-895","5","https://drive.google.com/file/d/13BaMCGt7GZE58Yt7Cii01kSwPvm8JYCu/view?usp=sharing"],
            ["78","Rewan Gamel Mohamed","12","P677-596","5","https://drive.google.com/file/d/1kigBGIhhufNxc7JLN5VC7p4mgzRsBR3v/view?usp=sharing"],
            ["79","Yehia Mahmoud Ahmed Abo Zahon","12","P060-083","5","https://drive.google.com/file/d/16qMu6lOWzMUt9THzqy4Ba8_0a_HGj0Yx/view?usp=sharing"],
            ["80","Yousef Ahmed Hassan Elrasheed","12","P009-613","5","https://drive.google.com/file/d/1bU0rIFCMSGXxcmQQMmI_IMBu7dETcw8H/view?usp=sharing"],
            ["81","Fares Mostafa Mohamed","21","A130-726","6","https://drive.google.com/file/d/1h5__I2VrfEhz0R5cHABjHISY8R6CvVcD/view?usp=sharing"],
            ["82","Hesham Ayman Nasr","21","A324-892","6","https://drive.google.com/file/d/1Q959ptQe5B3Nidn85WvoDbDWdwnaUJEQ/view?usp=sharing"],
            ["83","Omar Yousif Mohamed","21","A405-203","6","https://drive.google.com/file/d/1JKQ3Qkqkd1fACMOty7QqGPB_kwugWAvW/view?usp=sharing"],
            ["84","Mohamed Bassuony","21","A989-926","6","https://drive.google.com/file/d/1jB08awSlXAxLCTNlzZKiKqOeydmDyQX7/view?usp=sharing"],
            ["85","Amr Hamdy","21","A031-475","6","https://drive.google.com/file/d/1cun98l-b_QpsevveUNmFjukd84QeR3B9/view?usp=sharing"],
            ["86","Akram Mohsen Ibrahim","21","A714-587","6","https://drive.google.com/file/d/1mUh3s_yO4VrNYRn4mh6P-EL3G8RMUqTq/view?usp=sharing"],
            ["87","Ziad Hosny Elgndy","21","A049-411","6","https://drive.google.com/file/d/1DvSjiTFEH4rsOjf9Io2NcOZfLpXT2LyA/view?usp=sharing"],
            ["88","Omar Ehab Mohamed","21","A111-111","6","https://drive.google.com/file/d/10-8fCuS70TJH2UQWIzDciqZGedhkS4un/view?usp=sharing"],
            ["89","Radwa Saad Mohamed","21","A963-857","6","https://drive.google.com/file/d/1u8oLMfqSvnxqKbCjMYvMLQXoDdvQXsHu/view?usp=sharing"],
            ["90","Shehab Mohamed","21","A700-325","6","https://drive.google.com/file/d/1orisZwJ5rjv-fIPn8A5qLyURPhBQPqPP/view?usp=sharing"],
            ["91","Rewan Gamel Mohamed","21","A381-962","6","https://drive.google.com/file/d/1mE9C2Hn15wWiwkV3LEdyhr5B0HcG16hd/view?usp=sharing"],
            ["92","Afnan Mohamed Samy","21","A058-543","6","https://drive.google.com/file/d/1PK3AG4VBelkwHfsggVWj8gur8CPqlV3_/view?usp=sharing"],
            ["93","Abdelrahman Mohamed Ibrahim","21","A356-670","6","https://drive.google.com/file/d/1z3gnRKias4BnC65QR6JUsSwQY1YB9ivq/view?usp=sharing"],
            ["94","Moataz Saed Mohamed Morsy","21","A927-363","6","https://drive.google.com/file/d/1TaF7OcrqNb-hNruX_V9xK0l5tSbuTttv/view?usp=sharing"],
            ["95","Vironia Osama Ragaay","21","A198-824","6","https://drive.google.com/file/d/1byl4ajwsO1WZGXIMc6J1lvjhpKYPEcHZ/view?usp=sharing"],
            ["96","Seif Elden Tarek","21","A486-719","6","https://drive.google.com/file/d/13JsK0RssfqYzqagXNbQyLYQ3F20fYpq-/view?usp=sharing"],
            ["97","Karem Walaa Mohamed","21","A053-979","6","https://drive.google.com/file/d/1KEYkhd7MBf7yydQrhLoxbLhOkQjMd_I4/view?usp=sharing"],
            ["98","Seif Elden Tarek","12","P589-064","5","https://drive.google.com/file/d/1yxyrnHRTE-ZJWfo-iWlRV6kaWa7tljK1/view?usp=sharing"]
        ];

	    foreach($certificates as $certificate) {
	    	$cert = new Certificates();
	    	$cert->name = $certificate[1];
        	$cert->attendance = $certificate[2];
        	$cert->serial = $certificate[3];
        	$cert->course_id = $certificate[4];
        	$cert->link = $certificate[5];
        	$cert->save();
	    }
    }
}
