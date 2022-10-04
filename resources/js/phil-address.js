import {
    regions,
    provinces,
    cities,
    barangays,
} from "select-philippines-address";

const populateAddressInputs = async()=>{
    const r = await regions()

    const findSelectById = (id)=>{
        return ((select)=>{
            if(select.input.id == id ){
                return select
            }
        })
    }
    const provinceSelect = window.tomSelects.find(findSelectById("Province"))
    const citySelect = window.tomSelects.find(findSelectById("city"))
    const barangaySelect = window.tomSelects.find(findSelectById("barangay"))
    //populate provinces select
    for(const reg of r){
        const p = await provinces(reg.region_code)
        for(const prov of p){
            provinceSelect.addOption({value:prov.province_code, text:prov.province_name})

        }
    }
    //populate city select
    provinceSelect.on("change",async(value)=>{
        const c = await cities(value)
        citySelect.clear()
        citySelect.clearOptions()
        for(const city of c){
            citySelect.addOption({value:city.city_code, text:city.city_name})
        }
    })
    //populate barangay select
    citySelect.on("change", async(value)=>{
        const b = await barangays(value)
        barangaySelect.clear()
        barangaySelect.clearOptions()
        for(const barangay of b){
            barangaySelect.addOption({value:barangay.brgy_code, text:barangay.brgy_name})
        }
    })
}

window.addEventListener("load", ()=>{
    populateAddressInputs()
})



