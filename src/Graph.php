<?php

namespace Spatie\SchemaOrg;

use ArrayAccess;
use BadMethodCallException;
use Closure;
use JsonSerializable;
use ReflectionClass;
use ReflectionNamedType;
use Spatie\SchemaOrg\Exceptions\InvalidType;
use Spatie\SchemaOrg\Exceptions\TypeAlreadyInGraph;
use Spatie\SchemaOrg\Exceptions\TypeNotInGraph;

/**
 * @method self|AMRadioChannel aMRadioChannel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|APIReference aPIReference(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AboutPage aboutPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AcceptAction acceptAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Accommodation accommodation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AccountingService accountingService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AchieveAction achieveAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Action action(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ActionAccessSpecification actionAccessSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ActionStatusType actionStatusType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ActivateAction activateAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AddAction addAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AdministrativeArea administrativeArea(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AdultEntertainment adultEntertainment(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AggregateOffer aggregateOffer(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AggregateRating aggregateRating(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AgreeAction agreeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Airline airline(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Airport airport(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AlignmentObject alignmentObject(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AllocateAction allocateAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AmusementPark amusementPark(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AnimalShelter animalShelter(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Answer answer(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Apartment apartment(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ApartmentComplex apartmentComplex(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AppendAction appendAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ApplyAction applyAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Aquarium aquarium(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ArriveAction arriveAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ArtGallery artGallery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Article article(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AskAction askAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AssessAction assessAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AssignAction assignAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Attorney attorney(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Audience audience(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AudioObject audioObject(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AuthorizeAction authorizeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutoBodyShop autoBodyShop(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutoDealer autoDealer(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutoPartsStore autoPartsStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutoRental autoRental(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutoRepair autoRepair(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutoWash autoWash(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutomatedTeller automatedTeller(string|Closure $identifier = null, Closure $callback = null)
 * @method self|AutomotiveBusiness automotiveBusiness(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Bakery bakery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BankAccount bankAccount(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BankOrCreditUnion bankOrCreditUnion(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BarOrPub barOrPub(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Barcode barcode(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Beach beach(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BeautySalon beautySalon(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BedAndBreakfast bedAndBreakfast(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BedDetails bedDetails(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BedType bedType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BefriendAction befriendAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BikeStore bikeStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Blog blog(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BlogPosting blogPosting(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BoardingPolicyType boardingPolicyType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BodyOfWater bodyOfWater(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Book book(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BookFormatType bookFormatType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BookSeries bookSeries(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BookStore bookStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BookmarkAction bookmarkAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BorrowAction borrowAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BowlingAlley bowlingAlley(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Brand brand(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BreadcrumbList breadcrumbList(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Brewery brewery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Bridge bridge(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BroadcastChannel broadcastChannel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BroadcastEvent broadcastEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BroadcastFrequencySpecification broadcastFrequencySpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BroadcastService broadcastService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BuddhistTemple buddhistTemple(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusReservation busReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusStation busStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusStop busStop(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusTrip busTrip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusinessAudience businessAudience(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusinessEntityType businessEntityType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusinessEvent businessEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BusinessFunction businessFunction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|BuyAction buyAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CableOrSatelliteService cableOrSatelliteService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CafeOrCoffeeShop cafeOrCoffeeShop(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Campground campground(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CampingPitch campingPitch(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Canal canal(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CancelAction cancelAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Car car(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Casino casino(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CatholicChurch catholicChurch(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Cemetery cemetery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CheckAction checkAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CheckInAction checkInAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CheckOutAction checkOutAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CheckoutPage checkoutPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ChildCare childCare(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ChildrensEvent childrensEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ChooseAction chooseAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Church church(string|Closure $identifier = null, Closure $callback = null)
 * @method self|City city(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CityHall cityHall(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CivicStructure civicStructure(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ClaimReview claimReview(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Clip clip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ClothingStore clothingStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Code code(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CollectionPage collectionPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CollegeOrUniversity collegeOrUniversity(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ComedyClub comedyClub(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ComedyEvent comedyEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Comment comment(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CommentAction commentAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CommunicateAction communicateAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CompoundPriceSpecification compoundPriceSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ComputerLanguage computerLanguage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ComputerStore computerStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ConfirmAction confirmAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ConsumeAction consumeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ContactPage contactPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ContactPoint contactPoint(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ContactPointOption contactPointOption(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Continent continent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ControlAction controlAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ConvenienceStore convenienceStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Conversation conversation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CookAction cookAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Corporation corporation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Country country(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Course course(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CourseInstance courseInstance(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Courthouse courthouse(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CreateAction createAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CreativeWork creativeWork(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CreativeWorkSeason creativeWorkSeason(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CreativeWorkSeries creativeWorkSeries(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CreditCard creditCard(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Crematorium crematorium(string|Closure $identifier = null, Closure $callback = null)
 * @method self|CurrencyConversionService currencyConversionService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DanceEvent danceEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DanceGroup danceGroup(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DataCatalog dataCatalog(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DataDownload dataDownload(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DataFeed dataFeed(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DataFeedItem dataFeedItem(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Dataset dataset(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DatedMoneySpecification datedMoneySpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DayOfWeek dayOfWeek(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DaySpa daySpa(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DeactivateAction deactivateAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DefenceEstablishment defenceEstablishment(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DeleteAction deleteAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DeliveryChargeSpecification deliveryChargeSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DeliveryEvent deliveryEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DeliveryMethod deliveryMethod(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Demand demand(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Dentist dentist(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DepartAction departAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DepartmentStore departmentStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DepositAccount depositAccount(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DigitalDocument digitalDocument(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DigitalDocumentPermission digitalDocumentPermission(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DigitalDocumentPermissionType digitalDocumentPermissionType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DisagreeAction disagreeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DiscoverAction discoverAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DiscussionForumPosting discussionForumPosting(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DislikeAction dislikeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Distance distance(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Distillery distillery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DonateAction donateAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DownloadAction downloadAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DrawAction drawAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DrinkAction drinkAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DriveWheelConfigurationValue driveWheelConfigurationValue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|DryCleaningOrLaundry dryCleaningOrLaundry(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Duration duration(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EatAction eatAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EducationEvent educationEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EducationalAudience educationalAudience(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EducationalOrganization educationalOrganization(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Electrician electrician(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ElectronicsStore electronicsStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ElementarySchool elementarySchool(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EmailMessage emailMessage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Embassy embassy(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EmergencyService emergencyService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EmployeeRole employeeRole(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EmployerAggregateRating employerAggregateRating(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EmploymentAgency employmentAgency(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EndorseAction endorseAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EndorsementRating endorsementRating(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Energy energy(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EngineSpecification engineSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EntertainmentBusiness entertainmentBusiness(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EntryPoint entryPoint(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Enumeration enumeration(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Episode episode(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Event event(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EventReservation eventReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EventStatusType eventStatusType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|EventVenue eventVenue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ExerciseAction exerciseAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ExerciseGym exerciseGym(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ExhibitionEvent exhibitionEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FAQPage fAQPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FMRadioChannel fMRadioChannel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FastFoodRestaurant fastFoodRestaurant(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Festival festival(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FilmAction filmAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FinancialProduct financialProduct(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FinancialService financialService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FindAction findAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FireStation fireStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Flight flight(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FlightReservation flightReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Florist florist(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FollowAction followAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FoodEstablishment foodEstablishment(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FoodEstablishmentReservation foodEstablishmentReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FoodEvent foodEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FoodService foodService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|FurnitureStore furnitureStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Game game(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GamePlayMode gamePlayMode(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GameServer gameServer(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GameServerStatus gameServerStatus(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GardenStore gardenStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GasStation gasStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GatedResidenceCommunity gatedResidenceCommunity(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GenderType genderType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GeneralContractor generalContractor(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GeoCircle geoCircle(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GeoCoordinates geoCoordinates(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GeoShape geoShape(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GiveAction giveAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GolfCourse golfCourse(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GovernmentBuilding governmentBuilding(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GovernmentOffice governmentOffice(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GovernmentOrganization governmentOrganization(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GovernmentPermit governmentPermit(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GovernmentService governmentService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|GroceryStore groceryStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HVACBusiness hVACBusiness(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HairSalon hairSalon(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HardwareStore hardwareStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HealthAndBeautyBusiness healthAndBeautyBusiness(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HealthClub healthClub(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HighSchool highSchool(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HinduTemple hinduTemple(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HobbyShop hobbyShop(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HomeAndConstructionBusiness homeAndConstructionBusiness(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HomeGoodsStore homeGoodsStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Hospital hospital(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Hostel hostel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Hotel hotel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HotelRoom hotelRoom(string|Closure $identifier = null, Closure $callback = null)
 * @method self|House house(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HousePainter housePainter(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowTo howTo(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowToDirection howToDirection(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowToItem howToItem(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowToSection howToSection(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowToStep howToStep(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowToSupply howToSupply(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowToTip howToTip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|HowToTool howToTool(string|Closure $identifier = null, Closure $callback = null)
 * @method self|IceCreamShop iceCreamShop(string|Closure $identifier = null, Closure $callback = null)
 * @method self|IgnoreAction ignoreAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ImageGallery imageGallery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ImageObject imageObject(string|Closure $identifier = null, Closure $callback = null)
 * @method self|IndividualProduct individualProduct(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InformAction informAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InsertAction insertAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InstallAction installAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InsuranceAgency insuranceAgency(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Intangible intangible(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InteractAction interactAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InteractionCounter interactionCounter(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InternetCafe internetCafe(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InvestmentOrDeposit investmentOrDeposit(string|Closure $identifier = null, Closure $callback = null)
 * @method self|InviteAction inviteAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Invoice invoice(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ItemAvailability itemAvailability(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ItemList itemList(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ItemListOrderType itemListOrderType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ItemPage itemPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|JewelryStore jewelryStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|JobPosting jobPosting(string|Closure $identifier = null, Closure $callback = null)
 * @method self|JoinAction joinAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LakeBodyOfWater lakeBodyOfWater(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Landform landform(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LandmarksOrHistoricalBuildings landmarksOrHistoricalBuildings(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Language language(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LeaveAction leaveAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LegalService legalService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LegislativeBuilding legislativeBuilding(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LendAction lendAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Library library(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LikeAction likeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LiquorStore liquorStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ListItem listItem(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ListenAction listenAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LiteraryEvent literaryEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LiveBlogPosting liveBlogPosting(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LoanOrCredit loanOrCredit(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LocalBusiness localBusiness(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LocationFeatureSpecification locationFeatureSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LockerDelivery lockerDelivery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Locksmith locksmith(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LodgingBusiness lodgingBusiness(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LodgingReservation lodgingReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|LoseAction loseAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Map map(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MapCategoryType mapCategoryType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MarryAction marryAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Mass mass(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MediaGallery mediaGallery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MediaObject mediaObject(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MediaSubscription mediaSubscription(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MedicalOrganization medicalOrganization(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MeetingRoom meetingRoom(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MensClothingStore mensClothingStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Menu menu(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MenuItem menuItem(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MenuSection menuSection(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Message message(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MiddleSchool middleSchool(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MobileApplication mobileApplication(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MobilePhoneStore mobilePhoneStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MonetaryAmount monetaryAmount(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MonetaryAmountDistribution monetaryAmountDistribution(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Mosque mosque(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Motel motel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MotorcycleDealer motorcycleDealer(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MotorcycleRepair motorcycleRepair(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Mountain mountain(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MoveAction moveAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Movie movie(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MovieClip movieClip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MovieRentalStore movieRentalStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MovieSeries movieSeries(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MovieTheater movieTheater(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MovingCompany movingCompany(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Museum museum(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicAlbum musicAlbum(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicAlbumProductionType musicAlbumProductionType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicAlbumReleaseType musicAlbumReleaseType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicComposition musicComposition(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicEvent musicEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicGroup musicGroup(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicPlaylist musicPlaylist(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicRecording musicRecording(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicRelease musicRelease(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicReleaseFormatType musicReleaseFormatType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicStore musicStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicVenue musicVenue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|MusicVideoObject musicVideoObject(string|Closure $identifier = null, Closure $callback = null)
 * @method self|NGO nGO(string|Closure $identifier = null, Closure $callback = null)
 * @method self|NailSalon nailSalon(string|Closure $identifier = null, Closure $callback = null)
 * @method self|NewsArticle newsArticle(string|Closure $identifier = null, Closure $callback = null)
 * @method self|NightClub nightClub(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Notary notary(string|Closure $identifier = null, Closure $callback = null)
 * @method self|NoteDigitalDocument noteDigitalDocument(string|Closure $identifier = null, Closure $callback = null)
 * @method self|NutritionInformation nutritionInformation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Occupation occupation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OceanBodyOfWater oceanBodyOfWater(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Offer offer(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OfferCatalog offerCatalog(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OfferItemCondition offerItemCondition(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OfficeEquipmentStore officeEquipmentStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OnDemandEvent onDemandEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OpeningHoursSpecification openingHoursSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Order order(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OrderAction orderAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OrderItem orderItem(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OrderStatus orderStatus(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Organization organization(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OrganizationRole organizationRole(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OrganizeAction organizeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OutletStore outletStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|OwnershipInfo ownershipInfo(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PaintAction paintAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Painting painting(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ParcelDelivery parcelDelivery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ParcelService parcelService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ParentAudience parentAudience(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Park park(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ParkingFacility parkingFacility(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PawnShop pawnShop(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PayAction payAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PaymentCard paymentCard(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PaymentChargeSpecification paymentChargeSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PaymentMethod paymentMethod(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PaymentService paymentService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PaymentStatusType paymentStatusType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PeopleAudience peopleAudience(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PerformAction performAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PerformanceRole performanceRole(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PerformingArtsTheater performingArtsTheater(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PerformingGroup performingGroup(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Periodical periodical(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Permit permit(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Person person(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PetStore petStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Pharmacy pharmacy(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Photograph photograph(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PhotographAction photographAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Physician physician(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Place place(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PlaceOfWorship placeOfWorship(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PlanAction planAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PlayAction playAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Playground playground(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Plumber plumber(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PoliceStation policeStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Pond pond(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PostOffice postOffice(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PostalAddress postalAddress(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PreOrderAction preOrderAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PrependAction prependAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Preschool preschool(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PresentationDigitalDocument presentationDigitalDocument(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PriceSpecification priceSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Product product(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ProductModel productModel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ProfessionalService professionalService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ProfilePage profilePage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ProgramMembership programMembership(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PropertyValue propertyValue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PropertyValueSpecification propertyValueSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PublicSwimmingPool publicSwimmingPool(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PublicationEvent publicationEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PublicationIssue publicationIssue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|PublicationVolume publicationVolume(string|Closure $identifier = null, Closure $callback = null)
 * @method self|QAPage qAPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|QualitativeValue qualitativeValue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|QuantitativeValue quantitativeValue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|QuantitativeValueDistribution quantitativeValueDistribution(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Quantity quantity(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Question question(string|Closure $identifier = null, Closure $callback = null)
 * @method self|QuoteAction quoteAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RVPark rVPark(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RadioChannel radioChannel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RadioClip radioClip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RadioEpisode radioEpisode(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RadioSeason radioSeason(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RadioSeries radioSeries(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RadioStation radioStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Rating rating(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReactAction reactAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReadAction readAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RealEstateAgent realEstateAgent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReceiveAction receiveAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Recipe recipe(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RecyclingCenter recyclingCenter(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RegisterAction registerAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RejectAction rejectAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RentAction rentAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RentalCarReservation rentalCarReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReplaceAction replaceAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReplyAction replyAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Report report(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Reservation reservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReservationPackage reservationPackage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReservationStatusType reservationStatusType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReserveAction reserveAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Reservoir reservoir(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Residence residence(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Resort resort(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Restaurant restaurant(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RestrictedDiet restrictedDiet(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ResumeAction resumeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReturnAction returnAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Review review(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ReviewAction reviewAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RiverBodyOfWater riverBodyOfWater(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Role role(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RoofingContractor roofingContractor(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Room room(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RsvpAction rsvpAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|RsvpResponseType rsvpResponseType(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SaleEvent saleEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ScheduleAction scheduleAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ScholarlyArticle scholarlyArticle(string|Closure $identifier = null, Closure $callback = null)
 * @method self|School school(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ScreeningEvent screeningEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Sculpture sculpture(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SeaBodyOfWater seaBodyOfWater(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SearchAction searchAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SearchResultsPage searchResultsPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Season season(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Seat seat(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SelfStorage selfStorage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SellAction sellAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SendAction sendAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Series series(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Service service(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ServiceChannel serviceChannel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ShareAction shareAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ShoeStore shoeStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ShoppingCenter shoppingCenter(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SingleFamilyResidence singleFamilyResidence(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SiteNavigationElement siteNavigationElement(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SkiResort skiResort(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SocialEvent socialEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SocialMediaPosting socialMediaPosting(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SoftwareApplication softwareApplication(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SoftwareSourceCode softwareSourceCode(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SomeProducts someProducts(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SpeakableSpecification speakableSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Specialty specialty(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SportingGoodsStore sportingGoodsStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SportsActivityLocation sportsActivityLocation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SportsClub sportsClub(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SportsEvent sportsEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SportsOrganization sportsOrganization(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SportsTeam sportsTeam(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SpreadsheetDigitalDocument spreadsheetDigitalDocument(string|Closure $identifier = null, Closure $callback = null)
 * @method self|StadiumOrArena stadiumOrArena(string|Closure $identifier = null, Closure $callback = null)
 * @method self|State state(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SteeringPositionValue steeringPositionValue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Store store(string|Closure $identifier = null, Closure $callback = null)
 * @method self|StructuredValue structuredValue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SubscribeAction subscribeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SubwayStation subwayStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Suite suite(string|Closure $identifier = null, Closure $callback = null)
 * @method self|SuspendAction suspendAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Synagogue synagogue(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TVClip tVClip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TVEpisode tVEpisode(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TVSeason tVSeason(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TVSeries tVSeries(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Table table(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TakeAction takeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TattooParlor tattooParlor(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Taxi taxi(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TaxiReservation taxiReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TaxiService taxiService(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TaxiStand taxiStand(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TechArticle techArticle(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TelevisionChannel televisionChannel(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TelevisionStation televisionStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TennisComplex tennisComplex(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TextDigitalDocument textDigitalDocument(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TheaterEvent theaterEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TheaterGroup theaterGroup(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Thing thing(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Ticket ticket(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TieAction tieAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TipAction tipAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TireShop tireShop(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TouristAttraction touristAttraction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TouristInformationCenter touristInformationCenter(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ToyStore toyStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TrackAction trackAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TradeAction tradeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TrainReservation trainReservation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TrainStation trainStation(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TrainTrip trainTrip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TransferAction transferAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TravelAction travelAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TravelAgency travelAgency(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Trip trip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|TypeAndQuantityNode typeAndQuantityNode(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UnRegisterAction unRegisterAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UnitPriceSpecification unitPriceSpecification(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UpdateAction updateAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UseAction useAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserBlocks userBlocks(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserCheckins userCheckins(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserComments userComments(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserDownloads userDownloads(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserInteraction userInteraction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserLikes userLikes(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserPageVisits userPageVisits(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserPlays userPlays(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserPlusOnes userPlusOnes(string|Closure $identifier = null, Closure $callback = null)
 * @method self|UserTweets userTweets(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Vehicle vehicle(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VideoGallery videoGallery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VideoGame videoGame(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VideoGameClip videoGameClip(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VideoGameSeries videoGameSeries(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VideoObject videoObject(string|Closure $identifier = null, Closure $callback = null)
 * @method self|ViewAction viewAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VisualArtsEvent visualArtsEvent(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VisualArtwork visualArtwork(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Volcano volcano(string|Closure $identifier = null, Closure $callback = null)
 * @method self|VoteAction voteAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WPAdBlock wPAdBlock(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WPFooter wPFooter(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WPHeader wPHeader(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WPSideBar wPSideBar(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WantAction wantAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WarrantyPromise warrantyPromise(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WarrantyScope warrantyScope(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WatchAction watchAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Waterfall waterfall(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WearAction wearAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WebApplication webApplication(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WebPage webPage(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WebPageElement webPageElement(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WebSite webSite(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WholesaleStore wholesaleStore(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WinAction winAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Winery winery(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WorkersUnion workersUnion(string|Closure $identifier = null, Closure $callback = null)
 * @method self|WriteAction writeAction(string|Closure $identifier = null, Closure $callback = null)
 * @method self|Zoo zoo(string|Closure $identifier = null, Closure $callback = null)
 */
class Graph implements Type, ArrayAccess, JsonSerializable
{
    public const IDENTIFIER_DEFAULT = 'default';

    /** @var array */
    protected $nodes = [];

    /** @var array */
    protected $hidden = [];

    /**
     * This overloads all \Spatie\SchemaOrg\Schema construction methods.
     * You can call them the same like on the \Spatie\SchemaOrg\Schema class.
     * But you can also use the extended signatures.
     *
     * Graph::organisation(): Organisation
     * Graph::organisation('spatie'): Organisation
     * Graph::organisation(function(Organisation $organisation, Graph $graph) {}): Graph
     * Graph::organisation('spatie', function(Organisation $organisation, Graph $graph) {}): Graph
     *
     * @see \Spatie\SchemaOrg\Schema
     *
     * @param string $method
     * @param array $arguments
     *
     * @return $this|Type
     *
     * @throws \ReflectionException
     * @throws \BadMethodCallException
     */
    public function __call(string $method, array $arguments)
    {
        if (is_callable([Schema::class, $method])) {
            $type = (new ReflectionClass(Schema::class))->getMethod($method)->getReturnType();

            if (! $type instanceof ReflectionNamedType) {
                throw new BadMethodCallException(sprintf('The method "%s" has an invalid return type which does not resolve to "%s".', $method, ReflectionNamedType::class));
            }

            $identifier = self::IDENTIFIER_DEFAULT;

            if (isset($arguments[0])) {
                if (is_string($arguments[0])) {
                    $identifier = $arguments[0];

                    if (isset($arguments[1]) && is_callable($arguments[1])) {
                        $callback = $arguments[1];
                    }
                } elseif (is_callable($arguments[0])) {
                    $callback = $arguments[0];
                }
            }

            $schema = $this->getOrCreate($type->getName(), $identifier);

            if (isset($callback)) {
                call_user_func($callback, $schema, $this);

                return $this;
            }

            return $schema;
        }

        throw new BadMethodCallException(sprintf('The method "%s" does not exist on class "%s".', $method, get_class($this)));
    }

    public function if(bool $condition, Closure $callback)
    {
        if ($condition) {
            $callback($this);
        }

        return $this;
    }

    public function add(Type $schema, string $identifier = self::IDENTIFIER_DEFAULT): self
    {
        $type = get_class($schema);

        if ($this->has($type, $identifier)) {
            throw new TypeAlreadyInGraph(sprintf('The graph already has an item of type "%s" with identifier "%s".', $type, $identifier));
        }

        return $this->set($schema, $identifier);
    }

    public function has(string $type, string $identifier = self::IDENTIFIER_DEFAULT): bool
    {
        return array_key_exists($type, $this->nodes) && array_key_exists($identifier, $this->nodes[$type]);
    }

    public function set(Type $schema, string $identifier = self::IDENTIFIER_DEFAULT)
    {
        $this->nodes[get_class($schema)][$identifier] = $schema;

        return $this;
    }

    public function get(string $type, string $identifier = self::IDENTIFIER_DEFAULT): Type
    {
        if (! $this->has($type, $identifier)) {
            throw new TypeNotInGraph(sprintf('The graph does not have an item of type "%s" with identifier "%s".', $type, $identifier));
        }

        return $this->nodes[$type][$identifier];
    }

    public function getOrCreate(string $type, string $identifier = self::IDENTIFIER_DEFAULT): Type
    {
        if (! is_subclass_of($type, Type::class)) {
            throw new InvalidType(sprintf('The given type "%s" is not an instance of "%s".', $type, Type::class));
        }

        if (! $this->has($type, $identifier)) {
            $this->set(new $type(), $identifier);
        }

        return $this->get($type, $identifier);
    }

    public function hide(string $type, ?string $identifier = self::IDENTIFIER_DEFAULT): self
    {
        // hide all
        if ($identifier === null) {
            $this->hidden[$type] = true;

            return $this;
        }

        // hide single one if nothing configured
        if (! isset($this->hidden[$type])) {
            $this->hidden[$type][$identifier] = true;

            return $this;
        }

        // hide single one only if all are not already hidden
        if ($this->hidden[$type] !== true) {
            $this->hidden[$type][$identifier] = true;

            return $this;
        }

        return $this;
    }

    public function show(string $type, ?string $identifier = self::IDENTIFIER_DEFAULT): self
    {
        // show all
        if ($identifier === null) {
            $this->hidden[$type] = false;

            return $this;
        }

        // show single one if nothing configured
        if (! isset($this->hidden[$type])) {
            $this->hidden[$type][$identifier] = false;

            return $this;
        }

        // ignore if everything is shown
        if ($this->hidden[$type] === false) {
            return $this;
        }

        // show single one if identifier configuration exists
        if (is_array($this->hidden[$type])) {
            $this->hidden[$type][$identifier] = false;

            return $this;
        }

        if ($this->hidden[$type] === true) {
            $this->hidden[$type] = [];

            // keep everything hidden and show only single one
            if (isset($this->nodes[$type])) {
                foreach ($this->nodes[$type] as $id => $node) {
                    $this->hidden[$type][$id] = $id !== $identifier;
                }

                return $this;
            }

            // show single one if no nodes exist
            $this->hidden[$type][$identifier] = false;

            return $this;
        }

        return $this;
    }

    public function toArray(): array
    {
        $nodes = $this->getNodes();

        foreach ($this->hidden as $type => $hideAll) {
            if (is_bool($hideAll) && $hideAll) {
                unset($nodes[$type]);

                continue;
            }

            if (is_array($hideAll)) {
                foreach ($hideAll as $identifier => $hide) {
                    if (is_bool($hide) && $hide) {
                        unset($nodes[$type][$identifier]);
                    }
                }
            }
        }

        $nodes = array_reduce($nodes, function (array $carry, array $types) {
            return array_merge($carry, array_values($types));
        }, []);

        return [
            '@context' => $this->getContext(),
            '@graph' => $this->serializeNode(array_values($nodes)),
        ];
    }

    protected function serializeNode($node)
    {
        if (is_array($node)) {
            return array_map([$this, 'serializeNode'], array_values($node));
        }

        if ($node instanceof Type) {
            $node = $node->toArray();
            unset($node['@context']);
        }

        return $node;
    }

    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function getContext(): string
    {
        return 'https://schema.org';
    }

    public function toScript(): string
    {
        return '<script type="application/ld+json">'.json_encode($this, JSON_UNESCAPED_UNICODE).'</script>';
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function __toString(): string
    {
        return $this->toScript();
    }

    protected function getTypeAndIdentifier(string $key): array
    {
        if (strpos($key, '.') === false) {
            return [$key, self::IDENTIFIER_DEFAULT];
        }

        return explode('.', $key);
    }

    public function offsetExists($offset)
    {
        [$type, $identifier] = $this->getTypeAndIdentifier($offset);

        return $this->has($type, $identifier);
    }

    public function offsetGet($offset)
    {
        [$type, $identifier] = $this->getTypeAndIdentifier($offset);

        return $this->get($type, $identifier);
    }

    public function offsetSet($offset, $value)
    {
        $identifier = $offset;

        if (strpos($offset, '.') !== false) {
            [$type, $identifier] = $this->getTypeAndIdentifier($offset);
        }

        $this->set($value, $identifier);
    }

    public function offsetUnset($offset)
    {
        [$type, $identifier] = $this->getTypeAndIdentifier($offset);

        unset($this->nodes[$type][$identifier]);
    }
}
