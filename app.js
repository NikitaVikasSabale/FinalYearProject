var allinformation = {
    Satara: {
            "Khandala" : {
                Khandala : ["Khandala","Kanheri"],
                Lonand : ["Lonand","Ghatdare","Padali"]
            },
            
            "Koregaon" : {
                Koregaon : ["Koregaon","Ekambe","Bhadale","Jamb Kh"],
                Rahimatpur : ["Nagzari","Nhavi Bk"],
                Wathar : ["Wathar","Randullabad","Wagholi","Kinhai"]
            },

            "Mahabaleshwar": {
                Mahabaleshwar : ["Pimpari","Malcampeth","Kshetra M.Shwar","Manghar","Machutar","Taldev"],
                Gureghar : ["Metgutad","Gureghar"],
                Kasrund : ["Parpar","Bhirmani","Hatlot","Chaturbet","Shirnar"],
                Kumbhroshi : ["Kumbhroshi","Shirvali","Haroshi","Mettale"],
                Tapola : ["Tapola","Kalamgaon","Gogave","Gavdhoshi"],
                Waghavale : ["Waghavale","Uchat"]
            }, 

            "Medha": {
                Medha : ["Medha","Bhamghar","Kelghar","Kudal","Humgaon"],
                Bamnoli : ["Bamnoli","Kas","Kargaon"]
            },

            "Patan": { 
                Patan: ["Patan","Karvat","Morgiri"],
                Malharpeth: ["Malharpeth","Bahule","Chaphal"],	          
            	Dhoroshi: ["Dhoroshi","Dayati"],	           
                Helwak:	["Panchgani","Govare","Waghane","Rasati"],
            },

            "Phaltan": {
                Phaltan : ["Phaltan","Dalvadi","Nimblak","Girvi","Vadale"],
                Aadarki_Bk : ["Bibi","Salpe","Taradgaon","Dhaval"]
            },
            
            "Satara": {
                Satara: ["Satara","Bharatgaon","Kanher"],
                Parali: ["Parali","Kusavade","Palsavade","Thoseghar"],
                Rohot: ["Rohot","Dhavali","Khadgaon"]
            },

            "Vaduj": {
                Vaduj: ["Vaduj","Pusesavli","Katarkhatav"],
                Mayani: ["Mayani","Pachvad","Kaledhon"],
                Pusegaon: ["Pusegaon","Visapur","Diskal"]
            },
            
            "Wai": {
                Wai : ["Wai","Bopardi","Pakhandi"],
                Washiwali : ["Vadvali","Wasole","Jambali","Vyahali","Golewadi","Jor"],
                Bhuinj : ["Belmachi","Bopegaon"]
            }
    }
}

window.onload = function() {
      const selectForestDepartment = document.getElementById('forest_department'),
            selectForestArea = document.getElementById('forest_area'),
            selectCircle = document.getElementById('circle'),
            selectDesignatedArea = document.getElementById('designated_area'),
            selects = document.querySelectorAll('select')
    

            selectForestArea.disabled = true
            selectCircle.disabled = true
            selectDesignatedArea.disabled = true

            selects.forEach(select => {
                if(select.disabled == true) {
                    select.style.cursor = "auto"
                }
            })

            for(let forest_department in allinformation) {
               // console.log(forest_department);
                selectForestDepartment.options[selectForestDepartment.options.length] = new Option (forest_department, forest_department)
            }

            // Forest Department change
            selectForestDepartment.onchange = (e) => {
                selectForestArea.disabled = false
                selectCircle.disabled = true
                selectDesignatedArea.disabled = true

                selectForestArea.length = 1
                selectCircle.length = 1
                selectDesignatedArea.length = 1
                
                for(let forest_area in allinformation[e.target.value]) {
                    //console.log(forest_area);
                    selectForestArea.options[selectForestArea.options.length] = new Option (forest_area, forest_area)
                }

            }

            //Forest Area change
            selectForestArea.onchange = (e) => {
                selectCircle.disabled = false
                selectDesignatedArea.disabled = true

                selectCircle.length = 1
                selectDesignatedArea.length = 1

                for(let circle in allinformation[selectForestDepartment.value][e.target.value]) {
                    //console.log(circle);
                    selectCircle.options[selectCircle.options.length] = new Option(circle, circle)
                }
            }

            //Circle change
            selectCircle.onchange = (e) => {

                selectDesignatedArea.disabled = false
                selectDesignatedArea.length = 1

                let designated_areas = allinformation[selectForestDepartment.value][selectForestArea.value][e.target.value]

                for(let i=0; i<designated_areas.length; i++) {
                    selectDesignatedArea.options[selectDesignatedArea.options.length] = new Option(designated_areas[i], designated_areas[i])
                }
            }

}