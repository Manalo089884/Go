
import {
    provincesByCode,
    cities,
    barangays,
} from "select-philippines-address";

const convertAddresses = async()=>{

    const tbody = document.querySelector("#addressTbody")
    for(const element of tbody.querySelectorAll('tr') ){
        const addressCell= element.querySelector(".address")
        //Getting the value of the tr address
        const [provinceCode, cityCode, brgyCode] = addressCell.textContent.split("-")
        //Get City Name
        const cityList = await cities(provinceCode)
        const city = cityList.find((c)=>{
            return c.city_code === cityCode
        })
        // Get Barangay Name
        const brgyList = await barangays(cityCode)
        const brgy = brgyList.find((b)=>{
           return b.brgy_code === brgyCode
        })

        //Get Provuce Name
       const provinces  = await provincesByCode(city.region_desc)
        const province = provinces.find((p)=>{
            return p.province_code === provinceCode
        })
        //Change the address Cell Text
        addressCell.innerText = `${province.province_name}-${city.city_name}-${brgy.brgy_name}`
    }
}

window.addEventListener("load", ()=>{
     convertAddresses()
})



