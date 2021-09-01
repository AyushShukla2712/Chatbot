<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zeenius</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">


<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jqueryconvform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jqueryconvform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>
<body>

<div class="banner d-flex align-items-center" style="background-image: url('images/HR.jpg');" id="home">
<!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">

      <select data-conv-question="Hello!, I am Zeenius here to help you to find Job at Zee Media<br> Please Select one to Proceed " name="category" id="category" required>
        <option value="Editorial" id="Editorial">Editorial</option>
        <option value="Sales" id="Sales">Sales</option>
		<option value="Technology" id="Technology">Technology</option>
        <option value="Payroll" id="Payroll">Payroll</option>
		<option value="HR" id="HR">HR</option>
        <option value="Finance" id="Finance">Finance</option>
		<option value="Admin" id="Admin">Admin</option>
        <option value="Distribution" id="Distribution">Distribution</option>
		<option value="Marketing" id="Marketing">Marketing</option>
        <option value="Digital" id="Digital">Digital</option>

      </select>

      <div data-conv-fork="category">
        <div data-conv-case="Editorial">
		  <input type="text" name="Editorial" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory"> 
		  <select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
		  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true">
		</div>
		

        <div data-conv-case="Sales" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory"> 
		  <select data-conv-question="Please Confirm" id="subCategory" >
			
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
		  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true">
        </div>
		<div data-conv-case="Technology" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory"> 
			<select data-conv-question="Please Confirm" id="subCategory" >
				
				<option value="C&B">C&B</option>
				<option value="HRBP">HRBP</option>
				
			  </select>
			  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true">
		  </div>
		  <div data-conv-case="Payroll" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory">
			<select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
		  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true"> 
		  </div>
		  <div data-conv-case="HR" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory">
			<select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
			 
		  </div>
		  <div data-conv-case="Finance" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory"> 
			<select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
		  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true">
		  </div>
		  <div data-conv-case="Admin" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory">
			<select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
		  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true"> 
		  </div>
		  <div data-conv-case="Distribution" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory">
			<select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select> 
		  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true">
		  </div>
		  <div data-conv-case="Marketing" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory">
			<select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
		  <input type="text" name="name" data-conv-question="Job Title: Human Resources Assistant
	  Job Description: This position reports to the Human Resources (HR) director and
	  interfaces with company managers and HR staff. Company XYZ is
	  committed to an employee-orientated, high performance culture that
	  emphasizes empowerment, quality, continuous improvement, and the
	  recruitment and ongoing development of a superior workforce.
	  The intern will gain exposure
	  to these functional areas: HR Information Systems; Employee relations; Training and development;
	  Benefits; Compensation; Organization development; Employment
	  Specific responsibilities: - Employee orientation and training logistics and recordkeeping
	  - Company-wide committee facilitation and participation
	  - Employee safety, welfare, wellness and health reporting
	  - Provide direct support to employees during implementation of HR
	  services, policies and programs
	  What skills will the
	  intern learn: - Active participation in strategic planning process, including
	   developing goals, objectives and processes
	  - How to engage professionally in HR meetings and seminars with
	  other HR professionals in the region
	  - Gain experience with Human Resources Information system (HRIS)
	  database management and record keeping
	  - Application of HR law and compliance with governmental regulations
	  Qualifications: - Proficient with Microsoft Word and Excel
	  - General knowledge of employment law and practices
	  - Able to maintain a high level of confidentiality
	  - Effective oral and written management communication skills" data-no-answer="true"> 
		  </div>
		  <div data-conv-case="Digital" data-conv-fork="first-question2">
			<input type="text" name="companyName" data-conv-question="Select Sub Category" data-no-answer="true" id="SubCategory"> 
			<select data-conv-question="Please Confirm" id="subCategory" >
			<option value="Talent Acquistion">Talent Acquistion</option>
			<option value="Recruitment">Recruitment</option>
			<option value="Talent Management">Talent Management</option>
			<option value="L&D">L&D</option>
			<option value="PMS">PMS</option>
			<option value="C&B">C&B</option>
			<option value="HRBP">HRBP</option>
			
		  </select>
		  <input type="text" name="name" data-conv-question="Roles and Responsibilities
Job Brief:
- Ideal candidate should be able to plan and execute all digital marketing campaigns, including
SEO/SEM, marketing automation, multichannel marketing, influencer marketing, social media and
display advertising campaigns for new user acquisition
- Cultural fit: Structured problem-solving skills. Willingness to experiment.
- Excellent communication skills
- Identify trends and insights, and optimize spend and performance based on the insights
- Utilize strong analytical ability to evaluate end-to-end customer experience across multiple channels
and customer touch points
- Brainstorm new and creative growth strategies. Instrument conversion points and optimize user
funnels
- Should have an understanding of promotional creative and communication development.
- Planning, execution and reporting of all CRM activities like email, Push notification, SMS etc
- Thorough understanding of creative and communication development for all CRM activities.
- Indepth knowledge of CRM tools like appsflyer, clevertap etc. along with Google Analytics
- Thorough understanding of all social media marketing channels like facebook, twitter, Instagram etc
from
- Indepth understanding of content marketing across different channels.
- Proven record of both B2B and B2C marketing.
- Understanding of partnerships function.
- App marketing including acquisition, retention, integration, analytics and in app promotions.
Must-Have Skills
- Minimum 10+ years of proven experience in digital marketing in a media house
- In-depth understanding & hands-on experience in running ads across Google, Facebook, Youtube &
mobile affiliates to acquire new users
- Good understanding in Managing Paid Campaigns - Multiple channels
- Strong understanding of the digital landscape and how it can be used to drive acquisition and
revenue
- Measure and report performance of all digital marketing campaigns, and assess against goals (ROI
and KPIs). In-depth knowledge of google analytics is a must.
- Thorough knowledge of CRM, user segmentation, attribution etc." data-no-answer="true">
		  </div>

		  
	<select data-conv-question="Please Confirm" id="YesNo">
		<option value="Editorial">Yes</option>
		
		
		
	  </select>
	

      <input type="text" name="username" data-conv-question="Please, Enter your name" id="txtName" required placeholder="What's your Name?" required>
	  <input type="text" data-conv-question="Hi {username}, <br> It's a pleasure to meet you." data-no-answer="true">

      <input data-conv-question="Please ,Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="useremail" required placeholder="What's your e-mail?" id="txtEmail" required>

	  <input type="text" name="usernumber" data-conv-question="Please, Enter your number" id="txtNumber" required placeholder="What's your Mobile Number?" required>

	  
	  
	  <select data-conv-question="Upload your Resume">
	  
		  </select>

	  <div data-conv-question="Upload Resume" data-no-answer="true" >
	  
		</div>

		
	</div>

	
	</form>

	
		
		</div>

		
	  <form action="upload.php" method="post" enctype="multipart/form-data">
		
		<input type="file" name="fileToUpload" id="fileToUpload" required>
		<input type="submit" value="Upload Resume" name="button" id="bt" onclick="saveFile()" >
	  </form>

</div>



<!-- ChatBot end -->


<div class="banner d-flex align-items-center"  id="home">
	
	
</div>

<script>
    let saveFile = () => {
    	
        // Get the data from each element on the form.
		const Category = document.getElementById('category');
		const SubCategory = document.getElementById('subCategory');
    	const Name = document.getElementById('txtName');
        const Mobile = document.getElementById('txtNumber');
        const Email = document.getElementById('txtEmail');
        
        
        // This variable stores all the data.
        let data = 
            '\r Name: ' + Name.value + ' \r\n ' + 
            'Mobile: ' + Mobile.value + ' \r\n ' + 
            'Email: ' + Email.value + ' \r\n '+
			'Category: ' + Category.value + ' \r\n '+
			'Sub Category: ' + SubCategory.value + ' \r\n ';
        
        // Convert the text to BLOB.
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'ChatMessages.txt';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
			console.log(newLink);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

        newLink.click(); 
    }
</script>


</body>
</html>





