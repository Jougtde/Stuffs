module Labelable
  def relate
    has_many :labelings, :as => :labelable
    has_many :labels, :through => :labelings
  end

  def all_tags=(names)
    self.labels = names.split(",").map do |name|
      Label.where(title: name.strip).first_or_create!
    end
  end

  def all_tags
    self.labels.map(&:title).join(", ")
  end

  def self.included(base)
    base.extend(Labelable).relate
  end
end
