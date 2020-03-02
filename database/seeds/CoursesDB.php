<?php

use Illuminate\Database\Seeder;
use App\Courses;
class CoursesDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    $courses = [
	    			['3Ds Max', 30,"<p>
												3ds Max is software for 3D modeling, animation, rendering, and visualization. Create stunning scenes, detailed characters and bring realistic scenes to life.<br><br>

												- Course Content:<br>
												=============<br>
												- Introduction to 3Ds Max Interface<br>
												- Modeling & Modifiers<br>
												- Editable Poly<br>
												- Application on Architectural Projects<br>
												- V-ray introduction<br>
												- V-ray Materials, lighting<br>
												- V-ray render setup, plugin<br>
												- 3Ds Max to Photoshop<br>
												- Course Instructor: Mohamed Sarhan<br><br>

												- Instructor Bio:<br>
												=============<br>
												- Trainee at Cundall Company in England.<br>
												- Worked at I-BIMS, Access & Aly Magdy Studios.<br>
												- He participated in Several workshops in England & France:<br>
												• Mak’s Portrait Workshop<br>
												• P3 workshop (Parametric Forming of Space workshop)<br>
												• Workshop of architecture in Paris<br>
												• Interior design of new architectural studios<br>
												• The 6th annual University of Lincoln summer school in architecture<br>
												- He has several projects were executed in England, KSA & Egypt.<br><br>


												- Duration:<br>
												========<br>
												10 Sessions / 3 hours each<br>
											</p>"],
					['Mechanical AutoCAD', 21,"<p>
												AutoCAD is a 2-D and 3-D computer-aided drafting software application used in architecture, construction, and manufacturing to assist in the preparation of blueprints and other engineering plans.<br><br>

												- Course Content:<br>
												=============<br>
												- Getting Started with AutoCAD<br>
												- Basic Drawing and Editing Commands<br>
												- Drawing Precision in AutoCAD<br>
												- Making Changes in your Drawing<br>
												- Organizing Your Drawing with layers<br>
												- Advanced Object Types<br>
												- Getting information from your Drawing<br>
												- Advanced Editing Commands<br>
												- Inserting Blocks<br>
												- Text, Hatching, Adding Dimensions and Annotating your Drawing<br>
												- Projects<br>
												- Setting up a layout and Printing your Drawing<br>
												- AutoCAD 3D Modeling basics<br>

												- Prerequisites:<br>
												===========<br>
												Basic Knowledge of Engineering Drawing<br><br>

												- Course Instructor: Mai Ahmed Hussien<br>

												- Instructor Bio:<br>
												=============<br>
												• Current Master of Science Student, Mechanical Power Engineering, Faculty of Engineering, Alexandria University.<br>
												• Scholarship of Renewable Energy, Started in October 2014, Faculty of Agriculture, Alexandria University – Greneco Project, Italy, funded by the European Union.<br>
												• Former plant and process designer, AutoCAD 3D plant, HVAC and firefighting at Beluca Ingeneria Egypt, Alexandria.<br>
												• Mechanical Design Engineer and ( AutoCAD and MATLAB) instructor at ECORD Company for Consultation and training, Alexandria.<br>
												• AutoDesk Certified Professional: AutoCAD 2014<br>

												- Duration:<br>
												========<br>
												7 Sessions / 3 hours each<br>
											</p>"],
					['SOLIDWORKS', 24,"<p>
												It is one of the most popular CAD modelings recently where every company around the world make sure their engineers can model with it efficiently.<br><br>

												Course Content:<br>
												=============<br>
												1. Two Dimension Sketch:<br>
												1.1. Simple orders (Line – circle – Rectangle – Straight Slot, etc...).<br>
												1.2. Advanced Order (Trim entities – Convert entities – Pattern, etc...).<br>
												1.3. Sketched on Faces.<br>
												1.4. Smart Dimensions, Relations.<br>
												2. Three Dimension Features:<br>
												2.1. Extruded Boss/Base and Extruded Cut Boss/Base.<br>
												2.2. Revolved Boss/Base and Revolved Cut Boss/Base.<br>
												2.3. Swept Boss/Base and Swept Cut Boss/Base.<br>
												2.4. Lofted Boss/Base and Lofted Cut Boss/Base<br>
												2.5. Hole Wizard – etc…<br>
												3. Modification of Three Dimension Features:<br>
												3.1. 3D Fillet and 3D Chamfer.<br>
												3.2. 3D Pattern.<br>
												3.3. Rib – Draft – Mirror – shell – etc…<br>
												3.4. References Geometry and Curves.<br>
												4. Assembly:<br>
												4.1. Standard Mates (Coincident – Parallel, etc…).<br>
												4.2. Advanced Mates (Width – Path Mate, etc…).<br>
												4.3. Mechanical Mates (Gears – Cam, etc…).<br>
												4.4. Smart Fasteners.<br>
												4.5. Exploded View, etc…<br>
												5. Drawing Sheet:<br>
												5.1. Sheet Properties.<br>
												5.2. Standard 3D view.<br>
												5.3. Section view and Detail view, etc...<br>
												5.4. Smart Dimension, Model items, etc...<br>
												5.5. Tables and Drawing Details.<br>
												5.6. Annotation<br><br>


												Course Instructor: Mohamed Hussein<br><br>

												Instructor’s Bio:<br>
												===========<br>
												Eng. Mohamed Hussien works as Technical Office Manager at DL Steel Factory, He’s a Certified Sustainable Design Associate (CSDA) and a Certified SolidWorks Professional (CSWP) as well.<br>

												Duration:<br>
												=======<br>
												9 Sessions / 3 hours each.<br>
											</p>"],
					['Architectural AutoCAD', 24,""],
					['PCB', 12,"<p>
												A printed circuit board (PCB) is a plastic board made for connecting electronic components together. These are used in almost all computers and electronics today.<br><br>

												The 'card' is made of a material that does not conduct electricity, like fiberglass or plastic. Usually copper is etched (set in thin lines) inside the board between the layers of plastic, or on the surface of the board. This makes the electricity go only where it is wanted.<br><br>

												Course Content:<br>
												=============<br>
												1. Basic electronics review<br>
												2. Circuit design<br>
												3. Altium designer interface<br>
												4. Basic electronic components<br>
												5. Schematic drawing :<br>
												5.1. connecting wires<br>
												5.2. Using lables<br>
												5.3. VCC & GND<br>
												5.4. Altium quick annotation<br>
												5.5. Adding libraries<br>
												6. Creating PCBs :<br>
												6.1. Schematic to PCB transfer<br>
												6.2. Design Rules<br>
												6.3. Auto routing<br>
												6.4. Manual routing<br>
												6.5. Pad & Via<br>
												6.6. Pad sizing<br>
												6.7. Jumpers and shot circuits<br>
												7. Printing and exporting to pdf<br>
												8. Job files<br>
												9. Hardware Fabrication :<br>
												9.1. Printing on copper<br>
												9.2. Etching with FeCl3<br>
												9.3. Drilling<br>
												9.4. Welding<br>
												9.5. Finishing<br><br>


												Course Instructor: Abdalla Shawky<br><br>

												Instructor’s Bio:<br>
												===========<br>
												Chairman of Alexandria Training Center<br>
												highlights:<br>
												Design and manufacture of complete control systems No. 2 100% machine made in Egypt.<br>
												(Blood Pressure Monitor) Blood Pressure Monitor (Blood Pressure Meter)
												Lecture of two training courses in the logic control systems of the Siemens S7 in the Arab Academy for Science, Technology and Maritime Transport - Industrial Service Complex
												Member of the team for the best graduation project of the Engineering and Electronics Engineering at the Egyptian Engineering Day Ed 2005.<br>
												One of the founders of IEEE at Alexandria University and the third head of the student branch.<br>
												Interaction with Today's World 'at the Bibliotheca Alexandrina.<br>
												Leader of the Logistics Team for the Egyptian Engineering Day Organization team in 2005 at the main conference hall in Cairo.<br>
												Member of the Industrial Advisory Board of the Arab Academy for Science, Technology and Maritime Transport as Chairman of the Alexandria Training Center 2015, 2016.<br>
												Member of the jury and coordinator of the robotics competition of the Third Technical Education Development Forum held in the Academy of Science, Technology and Maritime Transport in honor of the Presidency.<br>
												Honoring by Prof. Nour El-Din Ismail as a coach and representative of the Alexandria Center for Training to implement the Vocational Training Academy 300 students at the University of Alexandria in 2014.<br>
												Member of the Arbitration Committee of the Egyptian Engineering Day 2015 in the field of electronics.<br>
												TOTL lectured on Empedid Systems in the first celebration of the Global Programming Day organized by the Egyptian Programmers Association and ITI in 2014.<br><br>

												Duration:<br>
												=======<br>
												4 Sessions / 3 hours each.<br>
											</p>"],
					['ARDUINO', 21,""],
					['Basics of Photography', 15,"<p>
												the art or process of capturing images, either on light-sensitive film or electronically in digital form, from which viewable pictures can be produced; the activity of someone who uses a camera<br><br>

												- Course Content :<br>
												=============<br>
												- Introduction to photography<br>
												- Composition<br>
												- Exposure<br>
												- Lenses & Light<br>
												- Introduction to Retouch<br>
												- Camera Raw Filter<br>
												(Outing for practice)<br><br>

												- Course Instructor: Elsayed Agami<br>

												- Instructor Bio:<br>
												=============<br>
												Fashion photographer in “ Blue & Red “ magazine since 2010 to 2011, then he worked a journalistic photographer in “Elyoum Elsabe3” since 2011 to 2013 , then he worked as a freelancer photographer at many studios like “ Mounir Shehata - Fahd - Zomoroda ....etc”, at the end he worked in “ Shabaket Rasd “ as a journalistic photographer since 2014 to 2015, and now he is The head of photography & vediography committee in IEEE PUASB<br>
												Achievements:<br>
												- 1st place in “Elmara3i” international competition by “ NAT GEO “<br>
												- 1st place in “Mashro3 Soura” Gallery by Alexandria Biblioteca<br>
												- 1st place in “Be or Die” project by Behance Adobe<br>
												- Golden Certificate from USA Consulate General Alexandria<br>
												- Participate in “Next Level” Workshop by USA Consulate Ganeral Alexandria<br>
												- 2nd place in “El-sheikh Zayed” Competition in UAE<br>
												- 3rd place in “Union Feeders” international Cup in France<br>
												- Participate in too many galleries in France - Germany - Australia - USA - UAE - KSA - Brazil<br>

												- Duration:<br>
												========<br>
												5 Sessions / 3 hours each<br>
											</p>"]
	    ];
	    for($i = 0; $i < 7; $i++) {
		    $course = new Courses();
		    $course->name=$courses[$i][0];
		    $course->hours = $courses[$i][1];
		    $course->description = $courses[$i][2];
		    $course->save();
	    }

    }
}
