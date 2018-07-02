@extends('main')
@section('content')


<div id="rules-tab">

<ul  class="nav">
    <li class="active"><a  href="#tab1" data-toggle="tab"><button type="button" class="btn btn-primary">Overview</button></a></li>
    <li><a href="#tab2" data-toggle="tab"><button type="button" class="btn btn-primary">Privacy Policy</button></a></li>
    <li><a href="#tab3" data-toggle="tab"><button type="button" class="btn btn-primary">Terms Of Service</button></a></li>
    <li><a href="#tab4" data-toggle="tab"><button type="button" class="btn btn-primary">Principles</button></a></li>
    <li><a href="#tab5" data-toggle="tab"><button type="button" class="btn btn-primary">FAQ</button></a></li>	
</ul>


<div class="tab-content -rules clearfix">



            <div class="tab-pane active" id="tab1"><!-- tab 1 -->
            Overview 
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt officiis ullam, ipsa mollitia fugit esse sit nemo. Blanditiis quam mollitia sapiente assumenda eveniet error sunt velit temporibus quas vel.</P>
            </div>

            <div class="tab-pane" id="tab2"><!-- tab 1 -->
            Privacy Policy
            <p>When you use our services, you’re trusting us with your information. We understand this is a big responsibility and work hard to protect your information and put you in control.</p>
            </div>

            <div class="tab-pane" id="tab3"><!-- tab 1 -->
            Terms Of Service
            <p>Thanks for using our products and services (“Services”). The Services are provided by Google LLC (“Google”), located at 1600 Amphitheatre Parkway, Mountain View, CA 94043, United States.

By using our Services, you are agreeing to these terms. Please read them carefully.

Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>
            </div>

            <div class="tab-pane" id="tab4"><!-- tab 1 -->
            Principles
            <p>At Google, we pursue ideas and products that often push the limits of existing technology. As a company that acts responsibly, we work hard to make sure any innovation is balanced with the appropriate level of privacy and security for our users. Our Privacy Principles help guide decisions we make at every level of our company, so we can help protect and empower our users while we fulfill our ongoing mission to organize the world’s information.</p>
            </div>

            <div class="tab-pane" id="tab5"><!-- tab 1 -->
            FAQ

       
                    <div class="panel-group" id="faqAccordion"> <!-- Faq -->
                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: What is Lorem Ipsum?</a>
                            </h4>

                            </div>
                            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five <a href="http://jquery2dotnet.com/" class="label label-success">http://jquery2dotnet.com/</a> centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: Why do we use it?</a>
                            </h4>

                            </div>
                            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: Where does it come from?</a>
                            </h4>

                            </div>
                            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: Where can I get some?</a>
                            </h4>

                            </div>
                            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--/panel-group-->


            </div> <!--(4) Faq tab  end -->
@endsection