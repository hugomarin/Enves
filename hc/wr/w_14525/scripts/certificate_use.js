
//holder arrays
var nodeLeftProperty;
var textArray = [];
var buttonArray = [];
var imageIDArray = [];
var soundIDArray = [];
var imageArray = [];
var soundArray = [];
var buttonXArray= [];
var picAlignArray=[];
var color;
var face;
var style;
var size;
var align;
var contentStyles = new Object();
var buttonStyles = new Object();
var headerStyles = new Object();
var instStyles = new Object();
var generalStyles = new Object();
var width;
var height;
var customVar;
var scoreVar;
var nameVar;

certificateUse1 = {
	onLoad: function()
	{
		if ( ! this.captivate )
			return;
		
		this.movieProps = this.captivate.CPMovieHandle.getMovieProps();
		if ( ! this.movieProps )
			return;
		this.varHandle = this.movieProps.variablesHandle;
		this.eventDisp = this.movieProps.eventDispatcher;
		this.xmlStr = this.captivate.CPMovieHandle.widgetParams();
		var size = this.OpenAjax.getSize();
		width = size.width;
		height = size.height;
		this.internalImage = '';
		this.externalImage = '';
		this.instructions = '';
		this.buttonLabel = '';
		this.buttonContent = '';
		this.soundName = '';
		this.title = '';
		this.directions = '';
		this.content = '';
		this.currentTheme
		this.updateData();
		this.doUpdate();                               
		if (this.captivate.CPMovieHandle.pauseMovie ) {
			this.captivate.CPMovieHandle.pauseMovie();
		}
	},

	updateData: function()
	{
		
		var id = 0;
		var initresult = jQuery.parseXML( this.xmlStr );
		var initresultDoc = jQuery( initresult );
		var thexml = initresultDoc.find( 'string' ).text();  
		
		var result = jQuery.parseXML( thexml );
		var resultDoc = jQuery( result );
		//alert(jQuery.isXMLDoc(resultDoc));
		
		//var theButtons = resultDoc.find( 'buttons' ); 
		var theTextProps = resultDoc.find( 'textProperties' );
		var theContentProps = resultDoc.find( 'buttonContent' );
		var theButtonProps = resultDoc.find( 'buttonLabel' );
		var theHeaderProps = resultDoc.find( 'certifTitle' );
		var theInstProps = resultDoc.find( 'certificate' );
		currentTheme = theInstProps.attr("id"); //theTextProps.children('general').attr("themeNum");
		
		
		headerStyles.color = theHeaderProps.children('color').attr("textColor");
		headerStyles.face = theHeaderProps.children('font').attr("face");
		headerStyles.italic = theHeaderProps.children('textDecoration').attr("italic");
		headerStyles.bold = theHeaderProps.children('textDecoration').attr("bold");
		headerStyles.size = theHeaderProps.children('font').attr("size");
		headerStyles.align = theHeaderProps.children('font').attr("align");	
		
		instStyles.color = theContentProps.children('color').attr("textColor");
		instStyles.face = theContentProps.children('font').attr("face");
		instStyles.italic = theContentProps.children('textDecoration').attr("italic");
		instStyles.bold = theContentProps.children('textDecoration').attr("bold");
		instStyles.size = theContentProps.children('font').attr("size");
		instStyles.align = theContentProps.children('font').attr("align");	
		
		generalStyles.customOn = theTextProps.children('general').attr('cOn');
		generalStyles.customX = theTextProps.children('general').attr('customX');
		generalStyles.customY = theTextProps.children('general').attr('customY');
		generalStyles.scoreOn = theTextProps.children('general').attr('sOn');
		generalStyles.scoreX = theTextProps.children('general').attr('scoreX');
		generalStyles.scoreY = theTextProps.children('general').attr('scoreY');
		generalStyles.dateOn = theTextProps.children('general').attr('dOn');
		generalStyles.dateX = theTextProps.children('general').attr('dateX');
		generalStyles.dateY = theTextProps.children('general').attr('dateY');
		generalStyles.nameOn = theTextProps.children('general').attr('nOn');
		generalStyles.nameX = theTextProps.children('general').attr('nameX');
		generalStyles.nameY = theTextProps.children('general').attr('nameY');
		generalStyles.customVarHolder = theTextProps.children('general').attr('customVar');
		
		
				if((currentTheme == "1") || (currentTheme == "9") || (currentTheme == "11") || (currentTheme == "15") || (currentTheme == "18"))
				{
					this.title = theInstProps.attr("headerOne");
					generalStyles.certif = theInstProps.attr("one");
					generalStyles.sig = theInstProps.attr("signature");
				}
				if((currentTheme == "2") || (currentTheme == "3") || (currentTheme == "12"))
				{
					this.title = theInstProps.attr("headerThree");
					generalStyles.certif = theInstProps.attr("three");
					generalStyles.sig = theInstProps.attr("signature");
				}
				if((currentTheme == "4") || (currentTheme == "6") || (currentTheme == "7") || (currentTheme == "8") || (currentTheme == "14") || (currentTheme == "16"))
				{
					this.title = theInstProps.attr("headerFour");
					generalStyles.certif = theInstProps.attr("four");
					generalStyles.sig = theInstProps.attr("signature");
				}
				if((currentTheme == "5") || (currentTheme == "10") || (currentTheme == "13") || (currentTheme == "17"))
				{
					this.title = theInstProps.attr("headerFive");
					generalStyles.certif = theInstProps.attr("five");
					generalStyles.sig = theInstProps.attr("signature");
				}
				
				var oldstring = escape(generalStyles.certif);
				generalStyles.certif = unescape(oldstring.replace(/%0A/gi,"<br>").replace(/%0D/gi,"<br>").replace(/%20/gi,"&nbsp;"));
				
				oldstring = escape(generalStyles.sig);
				generalStyles.sig = unescape(oldstring.replace(/%0A/gi,"<br>").replace(/%0D/gi,"<br>"));
				
				//score
				scoreVar = this.varHandle.cpInfoPercentage;
				nameVar = this.varHandle.v_Name;
				//custom
				var customVarName = generalStyles.customVarHolder
				customVar = this.varHandle[customVarName];
				
	},
	
	doUpdate: function() 
	{

		updateVariablePos();
		updateVariableVisibility();
		//alert(currenttheme);
		
		//init the other elements on the page		
		var elem = document.getElementById('intTitle');
		elem.innerHTML = this.title;
		
		
		elem = document.getElementById('Description');
		elem.innerHTML = generalStyles.certif
		
		//setup score
		if (scoreVar != undefined) {
			elem = document.getElementById('score');
			elem.innerHTML += "<div class='items'>" + scoreVar + "%</div>";			
		}
		
		//setup name
		if (nameVar != undefined) {
			elem = document.getElementById('name');
			elem.innerHTML += "<div class='items'>" + nameVar + "</div>";			
		}
		
		//setup custom
		if (customVar != undefined) {
			elem = document.getElementById('custom');
			elem.innerHTML += "<div class='items'>" + customVar + "</div>";			
		}		
		
		//setupdate
		var currentTime = new Date()
		var month = currentTime.getMonth() + 1
		var day = currentTime.getDate()
		var year = currentTime.getFullYear()
		var dateVal = month + "/" + day + "/" + year

		elem = document.getElementById('date');
		elem.innerHTML += "<div class='items'>" + dateVal + "</div>";			
		
		//setup sig
		elem = document.getElementById('sig');
		elem.innerHTML += "<div class='items'>" + generalStyles.sig + "</div>";			
		
	
				
		var button_elem;
		var body;
		var tabCount = textArray.length;
		var header
		//600, 14, 4
	
	
	
		changeTheme("themes/certificateTheme" + currentTheme + ".css", "");
		
		setupStyle("#intTitle", headerStyles)
		setupStyle("#Description", instStyles)
		setupStyle(".items", instStyles)
		setupCustomStyles();
		resizeInteraction(width,height);
		addClickHandlers(); //setup the click handlers
		
	}
};

certificate_use = function ()
{
	return certificateUse1;
}

