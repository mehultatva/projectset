if(jQuery('#calendar').length){
var calendarEl;
document.addEventListener('DOMContentLoaded', function () {  
  calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {  
    headerToolbar: {
      left: 'prev,next,today',
      center: '',
      right: 'dayGridMonth,listMonth'
    },
    displayEventTime:true,     
    viewDidMount: function (arg) {
      var month = calendar.getDate();
      var initial = moment().format('yyyy-MM');
      month = moment().add(-6, 'month');
      for (var i = 0; i < 13; i++) {
        var link = document.createElement("li");
        var linktext = document.createElement("a");
        linktext.className ="dropdown-item";
        linktext.text=month.format('MMMM YYYY');
        linktext.value=month.format('YYYY-MM-01');
        link.appendChild(linktext);
        document.getElementById('month-dropdown').append(link);
        month.add(1, 'month');
      }
    
    },
    eventDidMount: function(info) {
        if (info.view.type === 'listMonth') {
          info.el.childNodes[2].firstChild.remove();
          info.el.childNodes[2].innerHTML = `
          <div class='inner-list-block'>
          <div class="heading-block">
          <h3>${info.event.title}</h3>
          <p>${info.event.extendedProps.description}</p>
          </div>
          <div class='right-block'>
          <ul class='icon-listing'>
          <li><a href="#" class="view-link" title="meet us"></a></li>
          <li><a href="#" class="out-link" title="copy link"></a></li>
          </ul></div></div>`
          
        }
        
      },
    events: [
        {
          id: 'a',
          title: 'Project Launch',
          start: '2022-02-17T09:30:00',
          classNames:['event-chip'],
          extendedProps: {
            description: 'Come along and meet everyone taking part, from the organizers to the participants.'
          },
        },
        {
            id: 'b',
            title: 'Planning',
            start: '2022-02-19T09:30:00',
            classNames:['event-chip'],
            extendedProps: {
                description: 'Come along and meet everyone taking part, from the organizers to the participants.'
              },
        },
        {
            id: 'c',
            title: 'Brainstorming',
            start: '2022-02-19T10:15:00',
            classNames:['event-chip','orange-light-chip'],
            extendedProps: {
                description: 'Come along and meet everyone taking part, from the organizers to the participants.'
              },
        },
        {
            id: 'd',
            title: 'Check in',
            start: '2022-02-19T12:45:00',
            classNames:['event-chip','pink-chip'],
            extendedProps: {
                description: 'Come along and meet everyone taking part, from the organizers to the participants.'
              },
        },
        {
            id: 'e',
            title: 'Client Workshop',
            start: '2022-02-22',
            end:'2022-02-25',
            classNames:['event-chip'],
            extendedProps: {
                description: 'BioChemistry'
              },
        }, 
        {
            id: 'f',
            title: 'Design Thinking',
            start: '2022-02-27T10:15:00',
            classNames:['event-chip','pink-chip'],
            extendedProps: {
                description: 'BioChemistry'
              },
        },
        {
            id: 'g',
            title: 'In-house Workshop',
            start: '2022-02-27',
            end:'2022-03-01',
            classNames:['event-chip'],
            extendedProps: {
                description: 'BioChemistry'
              },

        }
      ]
    
  });
  
  calendar.render();  
  var currentMonth = calendar.currentData.viewTitle;
  document.getElementById('month-name').innerHTML += currentMonth;    

  const monthList = document.querySelectorAll('#month-dropdown .dropdown-item');  
  for(var i = 0; i<monthList.length;i++){
    if(currentMonth === monthList[i].text){        
        monthList[i].parentNode.classList.add('active');
    }
  }  
  monthList.forEach(el => el.addEventListener('click', monthchangeEvent));  
  function monthchangeEvent(e) {    
    calendar.gotoDate(e.target.value)
  }
  document.getElementById("switch-input").addEventListener("change", inputChange);
  function inputChange(e) {
    if(e.target.checked == true) {
      document.querySelector('.fc-listMonth-button').click();
    }
    else {
      document.querySelector('.fc-dayGridMonth-button').click();
    }
  }
  document.querySelector(".fc-prev-button").addEventListener("click", dropdownprevchangeEvent);
  function dropdownprevchangeEvent(e) {
    document.querySelector('.calendar-wrap .dropdown-wrap .active').previousSibling.children[0].click();
  }
  document.querySelector(".fc-next-button").addEventListener("click", dropdownnextchangeEvent);
  function dropdownnextchangeEvent(e) {
    document.querySelector('.calendar-wrap .dropdown-wrap .active').nextSibling.children[0].click();
  }
  document.querySelector(".fc-today-button").addEventListener("click", currentMonthChangeEvent);
  function currentMonthChangeEvent(e){
    document.getElementById('month-name').innerHTML = currentMonth;      
    for(var i = 0; i<monthList.length;i++){
        monthList[i].parentNode.classList.remove('active');
        if(currentMonth === monthList[i].text){        
            monthList[i].parentNode.classList.add('active');
        }
    }   
  }
  document.querySelector('.custom-tabbing-wrapper .custom-tab-heading ul li a.schedule-link').addEventListener('click',calendarRefresh);
  function calendarRefresh(e) {
    calendar.render();
  }
});
}